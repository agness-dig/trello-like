<div id="container-of-everything">

        <div class="container-div" id="side-bar">
            <p id="button"><i class="fas fa-plus" id="img-button" onclick="addProject(this)"></i> Créer un projet</p>
            <h2 id="title-projet-side-bar">Mes projets</h2>
            <ul>
                <li class="project-list"><p id="link_list">- Projet 1</p></li>
            </ul>
        </div>
        <!-- central part of the project : where the name and card goes -->
        <div class="container-div" id="project">
            <div id="title">
                <h1>Projet 1</h1>
        
                <p class="button-project" onclick="addList(this)"><i class="fas fa-plus img-button-project"></i> Ajouter une liste</p>
                <p class="button-project" onclick="calendar(this)" id="button-project__second-lign"><img class="img-button-project" id="img-calendar" src="../public/assets/images/calendar.png"> Calendrier</p>
            </div>

            <!-- The part where one list goes -->
            <div class="container-project">
                <div class="list-container">
                    <div class="list-title">
                        <h2 class="header-list-title">To do</h2>
                    </div>
                    <div class="add-card-div" onclick="add(this)">
                        <i class="fas fa-plus plus"></i><p class="add-card">Ajouter une carte</p> 
                    </div>
                    <div class="card draggable dragging" draggable="true">
                        <h3 class="edit" contenteditable="true"></h3>
                        <p class="edit" contenteditable="true"></p>
                        <i class="fas fa-times remove"  onclick="removeth(this)"></i>
                    </div>
                </div>
                
                <div class="list-container">
                    <div class="list-title">
                        <h2 class="header-list-title">Doing</h2>
                    </div>
                    <div class="add-card-div" onclick="add(this)">
                        <i class="fas fa-plus plus"></i><p class="add-card">Ajouter une carte</p> 
                    </div>

                    <div class="card draggable dragging" draggable="true">
                        <h3 class="edit" contenteditable="true"></h3>
                        <p class="edit" contenteditable="true"></p>
                        <i class="fas fa-times remove"  onclick="removeth(this)"></i>
                    </div>

                </div>

                <div class="list-container">
                    <div class="list-title">
                        <h2 class="header-list-title">Done</h2>
                    </div>
                    <div class="add-card-div" onclick="add(this)">
                        <i class="fas fa-plus plus"></i><p class="add-card">Ajouter une carte</p> 
                    </div>

                    <div class="card draggable dragging" draggable="true">
                        <h3 class="edit" contenteditable="true"></h3>
                        <p class="edit" contenteditable="true"></p>
                        <i class="fas fa-times remove"  onclick="removeth(this)"></i>
                    </div>  
                </div>
            </div>
            <!-- End of the list -->
        </div>

    </div>