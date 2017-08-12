/**
 * Admin JavaScript, no jQuery
 */

var addedSkillsText;
var addedSkillsIDs;
var addedImagesIDs;

document.onreadystatechange = function() {
  if (document.readyState === 'complete') { 
    // skills
    var editSections = document.getElementsByClassName('edit');
	if (editSections)
	{
		for (i = 0; i < editSections.length; i++) {
			editSections[i].firstElementChild.children[1].firstChild.addEventListener('click', startEdit);
			if (editSections[i].firstElementChild.children.length > 2)  
				editSections[i].firstElementChild.children[2].firstChild.addEventListener('click', startDelete);
		}	
    }
	if (document.getElementsByClassName('btn-skill').length>0)
		document.getElementsByClassName('btn-skill')[0].addEventListener('click', createNewSkill);
	
	// projects skills
    addedSkillsIDs = document.getElementById('skills');
	if (document.getElementsByClassName('added-skills').length > 0) {
		addedSkillsText = document.getElementsByClassName('added-skills')[0];  
		for (i = 0; i < addedSkillsText.firstElementChild.children.length; i++) {
			addedSkillsText.firstElementChild.children[i].firstElementChild.addEventListener('click', removeSkillFromProject);
		}
    }
	if (document.getElementsByClassName('btn-skills').length > 0)
		document.getElementsByClassName('btn-skills')[0].addEventListener('click', addSkillToProject);
	
	// projects and posts images 
	addedImagesIDs = document.getElementById('images');
	var imageClass = document.getElementsByClassName('image')
	if (imageClass.length > 0)
	{
		for (var i = 0; i < imageClass.length; i++) {
			imageClass[i].addEventListener('change', setImage);
        }
	}	
  }
};

function startEdit(event) {
    event.preventDefault();
    event.target.textContent = "Guardar";
    var li = event.target.parentNode.parentNode.children[0];
    li.children[0].value = event.target.parentNode.parentNode.parentNode.previousElementSibling.textContent;
    li.style.display = "inline-block";
    setTimeout(function() {
        li.children[0].style.maxWidth = "120px";
    }, 1);
    event.target.removeEventListener('click', startEdit);
    event.target.addEventListener('click', saveEdit);
}

function saveEdit(event) {
    event.preventDefault();
    var li = event.target.parentNode.parentNode.children[0];
    var skillName = li.children[0].value;
    var skillId = event.target.parentNode.parentNode.parentNode.parentNode.dataset['id'];
    if (skillName.length === 0) {
        alert("Please enter a valid Skill name!");
        return;
    }
    ajax("POST", "/admin/projects/skill/update", "name=" + skillName + "&skill_id=" + skillId, endEdit, [event]);
}

function endEdit(params, success, responseObj) {
    var event = params[0];
    if (success) {
        var newName = responseObj.new_name;
	    event.target.parentNode.parentNode.parentNode.previousElementSibling.textContent = newName;
    }
    event.target.textContent = "Editar";
    var li = event.target.parentNode.parentNode.children[0];
    li.children[0].style.maxWidth = "0px";
    setTimeout(function() {
        li.style.display = "none";
    }, 300);
    event.target.removeEventListener('click', saveEdit);
    event.target.addEventListener('click', startEdit)
}

function createNewSkill(event) {
    event.preventDefault();

    var name = document.getElementById('skill-name').value;
    if (name.length === 0) {
        alert("Please enter a valid Category name!");
        return;
    }
    ajax("POST", "/admin/projects/skills", "name=" + name, newSkillCreated, [name]);
}

function newSkillCreated(params, success, responseObj) {
    var name = params[0];
    location.reload();
}

function startDelete(event) {
    // Optional Modal here
    deleteSkill(event);
}

function deleteSkill(event) {
    event.preventDefault();
    event.target.removeEventListener('click', startDelete);
	var skillId = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.dataset['id'];

    ajax("GET", "/admin/projects/skill/" + skillId + "/delete", null, skillDeleted, [event.target.parentNode.parentNode.parentNode.parentNode.parentNode]);
}

function skillDeleted(params, success, responseObj) {
    var divSkill = params[0];
    if (success) {
        divSkill.style.backgroundColor = "#ffc4be";
        setTimeout(function() {
            divSkill.remove();
            location.reload();
        }, 300);
    }
}

function addSkillToProject(event) {
    event.preventDefault();
    var select = document.getElementById('skills-select');
    var selectedSkillID = select.options[select.selectedIndex].value;
    var selectedSkillName = select.options[select.selectedIndex].text;
    if (parseSkills().indexOf(selectedSkillID) !== -1) {
        return;
    }
    if (addedSkillsIDs.value.length > 0) {
        addedSkillsIDs.value = addedSkillsIDs.value + "," + selectedSkillID;
    } else {
        addedSkillsIDs.value = selectedSkillID;
    }
    var li = document.createElement('li');
    var link = document.createElement('a');
    link.href = "#";
    link.innerText = selectedSkillName;
    link.dataset['id'] = selectedSkillID;
    link.addEventListener('click', removeSkillFromProject);
    li.appendChild(link);
    addedSkillsText.firstElementChild.appendChild(li);
}

function addImage(element) {
    var checkedImageID = element.value;	
    if (parseImages().indexOf(checkedImageID) !== -1) {
        return;
    }
    if (addedImagesIDs.value.length > 0) {
        addedImagesIDs.value = addedImagesIDs.value + "," + checkedImageID;
    } else {
        addedImagesIDs.value = checkedImageID;
    }
}

function removeSkillFromProject(event) {
    event.preventDefault();
    event.target.removeEventListener('click', removeSkillFromProject);
    var skillId = event.target.dataset['id'];
    var skillsIdsArray = parseSkills();
    var index = skillsIdsArray.indexOf(skillId);
    skillsIdsArray.splice(index, 1);
    var newSkills = skillsIdsArray.join(',');
    addedSkillsIDs.value = newSkills;
    event.target.parentElement.remove();
}

function removeImage(element) {
    var uncheckedImageID = element.value;	
	var imagesIdsArray = parseImages();
    var imageIndex = imagesIdsArray.indexOf(uncheckedImageID);
    imagesIdsArray.splice(imageIndex, 1);
    addedImagesIDs.value = imagesIdsArray.join(',');
}

function setImage(event)
{
	event.target.checked ? addImage(event.target): removeImage(event.target);
}

function parseSkills() {
    return addedSkillsIDs.value.split(",");
}

function parseImages() {
    return addedImagesIDs.value.split(",");
}

function ajax(method, url, params, callback, callbackParams) {
    var http = new XMLHttpRequest();; // IE7+, Firefox, Chrome, Opera, Safari

    http.onreadystatechange = function() {
        if (http.readyState == XMLHttpRequest.DONE ) {
            if(http.status == 200){
                var obj = JSON.parse(http.responseText);
                callback(callbackParams, true, obj);
            }
            else if(http.status == 400) {
                alert("Tecnología no salvada. Inténtalo de nuevo");
                callback(callbackParams, false);

            }
            else {
                var obj = JSON.parse(http.responseText);
                if (obj.message) {
                    alert(obj.message);
                } else {
                    alert("Revisa el nombre");
                }
                callback(callbackParams, false);
            }
        }
    };

    http.open(method, baseUrl + url, true);
    http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    http.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    http.send(params + "&_token=" + token);
}