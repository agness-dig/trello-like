// Function to add cards in the array // 

function add(x,y = "Description de la tâche", z="Nom de la tâche"){
    var xd = document.createElement("div");
    xd.className = "card draggable dragging"
    xd.draggable = "true";
    xd.onclick = function(){edit(this)}
    xd.innerHTML = '<h3 class="edit" contenteditable="true">'+ z +'</h3><p class="edit" contenteditable="true">'+y+'</p><i class="fas fa-times remove"  onclick="removeth(this)"></i>'
    x.parentNode.insertBefore(xd, x.parentNode.childNodes[x.parentNode.childNodes.length-2])
  }

// Function to add list in the project // 
  
function addList(x,y = "", z=""){
    var xd = document.createElement("div");
    xd.className = "list-container"
    xd.onclick = function(){edit(this)}
    xd.innerHTML = '<div class="list-container"><div class="list-title"><h2 class="header-list-title">To do</h2></div><div class="add-card-div" onclick="add(this)"><i class="fas fa-plus plus"></i><p class="add-card">Ajouter une carte</p> </div><div class="card draggable dragging" draggable="true"><h3 class="edit" contenteditable="true"></h3><p class="edit" contenteditable="true"></p><i class="fas fa-times remove"  onclick="removeth(this)"></i></div>'
    x.parentNode.insertBefore(xd, x.parentNode.childNodes[x.parentNode.childNodes])
  }
  
  // Function to add project (new project) // 

  function addProject(x,y = "", z=""){
    var xd = document.createElement("div");
    xd.className = "container-project"
    xd.onclick = function(){edit(this)}
    xd.innerHTML = '<div class="container-project"><div class="list-container"><div class="list-title"><h2 class="header-list-title">To do</h2></div><div class="add-card-div" onclick="add(this)"><i class="fas fa-plus plus"></i><p class="add-card">Ajouter une carte</p> </div><div class="card draggable dragging" draggable="true"><h3 class="edit" contenteditable="true"></h3><p class="edit" contenteditable="true"></p><i class="fas fa-times remove"  onclick="removeth(this)"></i></div>'
    x.parentNode.insertBefore(xd, x.parentNode.childNodes[x.parentNode.childNodes])
  }
  
  
  