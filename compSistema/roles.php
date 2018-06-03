
<div style="background-color: white; padding: 5px;" class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-plus-square"></i> Agregar Role</a>
    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-edit"></i> Editar existentes</a>

</div>
<div style="background-color: white; padding: 5px;" class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="card">
            <div class="card-header">
                Nuevo Rol
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Permisos o accesos</a>
                    </li>
                   
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <div class="card">
            <div class="card-body">
                This is some text within a card body.
            </div>
        </div>
    </div>

</div>


