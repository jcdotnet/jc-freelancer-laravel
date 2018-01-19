/**
 * Admin JavaScript, no jQuery
 */
var addedSkillsText; // project added skills, works also for post categories
var addedSkillsIDs; //  project added skills, works also for post categories
var addedImagesIDs;

document.onreadystatechange = function() {
  if (document.readyState === 'complete') { 

	// create project skills and blog categories
    if (document.getElementsByClassName('btn-skill').length>0)
		document.getElementsByClassName('btn-skill')[0].addEventListener('click', createNewSkill);
	if (document.getElementsByClassName('btn-category').length>0)
		document.getElementsByClassName('btn-category')[0].addEventListener('click', createNewCategory);
	
	// edit/delete project skills and blog categories
    var editSections = document.getElementsByClassName('edit');
	if (editSections)
	{
		for (i = 0; i < editSections.length; i++) {
			editSections[i].firstElementChild.firstElementChild.children[1].firstElementChild.addEventListener('click', startEdit);
			if (editSections[i].firstElementChild.firstElementChild.children.length > 2)  
				editSections[i].firstElementChild.firstElementChild.children[2].firstChild.addEventListener('click', startDelete);
		}	
    }
	// project added skills and post added categories
    addedSkillsIDs = document.getElementById('skills');
	if (document.getElementsByClassName('added-skills').length > 0) {
		addedSkillsText = document.getElementsByClassName('added-skills')[0];  
		for (i = 0; i < addedSkillsText.firstElementChild.children.length; i++) {
			addedSkillsText.firstElementChild.children[i].firstElementChild.addEventListener('click', removeSkillFromProject);
		}
    }
	if (document.getElementsByClassName('btn-skills').length > 0)
		document.getElementsByClassName('btn-skills')[0].addEventListener('click', addSkillToProject);
	
	// project added images 
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

function createNewSkill(event) {
    event.preventDefault();
    
    var name = document.getElementById('skill-name').value;
    if (name.length === 0) {
        alert("Please enter a valid skill name!");
        return;
    }
    ajax("POST", "/admin/projects/skills", "name=" + name, endCreate, [name]);
}

function createNewCategory(event) {
    event.preventDefault();
    var name = document.getElementById('category-name').value;
    if (name.length === 0) {
        alert("Please enter a valid category name!");
        return;
    }
    ajax("POST", "/admin/categories", "name=" + name, endCreate, [name]);
}

function endCreate(params, success, responseObj) {
    var name = params[0];
    location.reload();
}

function startEdit(event) {
	event.preventDefault();

	event.target.innerText = "Guardar"; //event.target.textContent = "Guardar";
	var li = event.target.parentNode.parentNode.children[0]; // = var li = event.path[2].children[0];	
	li.children[0].value = event.target.parentNode.parentNode.parentNode.parentNode.previousElementSibling.textContent; // event.path[4].previous...
    li.style.display = "inline-block";
    setTimeout(function() {
        li.children[0].style.maxWidth = "120px";
    }, 1);
    event.target.removeEventListener('click', startEdit);
	event.target.addEventListener('click', saveEdit);// do some stuff
    
    
}

function saveEdit(event) {
    event.preventDefault();
    var li = event.target.parentNode.parentNode.children[0];
    var theName = li.children[0].value;
    var theId = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.dataset['id'];
    if (theName.length === 0) {
        alert("Please enter a valid Skill name!");
        return;
    }
	if (event.target.classList.contains('category-will-edit')) 
		ajax("POST", "/admin/category/update", "name=" + theName + "&category_id=" + theId, endEdit, [event]);
	else
		ajax("POST", "/admin/projects/skill/update", "name=" + theName + "&skill_id=" + theId, endEdit, [event]);   
}

function endEdit(params, success, responseObj) {
    var event = params[0];
    if (success) {
        var newName = responseObj.new_name;
	    event.target.parentNode.parentNode.parentNode.parentNode.previousElementSibling.textContent = newName;
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

function startDelete(event) {
    event.preventDefault();
    event.target.removeEventListener('click', startDelete);
	var theId = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.dataset['id'];
    if (event.target.classList.contains('category-will-delete')) 
		ajax("GET", "/admin/categories/" + theId + "/delete", null, endDelete, [event.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode]);
	else
		ajax("GET", "/admin/projects/skill/" + theId + "/delete", null, endDelete, [event.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode]);
}

function endDelete(params, success, responseObj) {
    var div = params[0];
    if (success) {
        div.style.backgroundColor = "#ffc4be";
        setTimeout(function() {
            div.remove();
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
	li.classList.add("list-inline-item");
    var link = document.createElement('a');
    link.href = "#";
    link.innerText = selectedSkillName;
	link.classList.add("badge", "badge-secondary");
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

// AJAX CALL
function ajax(method, url, params, callback, callbackParams) {
    var http = new XMLHttpRequest();; // IE7+, Firefox, Chrome, Opera, Safari

    http.onreadystatechange = function() {
        if (http.readyState == XMLHttpRequest.DONE ) {
            if(http.status == 200){
                var obj = JSON.parse(http.responseText);
                callback(callbackParams, true, obj);
            }
            else if(http.status == 400) {
                alert("Error al salvar. Inténtalo de nuevo");
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