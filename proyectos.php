<?php
    require 'head.php'
?>
<div class="col-md-3 right">
    <label class="control-label">Buscar : </label>
    <input type="text" class="form-control" name="buscar" placeholder="Titulo" ng-model="search.titulo" >
</div>
<div ng-controller="ProyectoController">
<section class="app-section2">
    <div class="container">
        <div class="row">
                <figure class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <br />
                <img alt="" class="img-responsive " src="Img/Proyectos/Etiquetas/activos.png" />
            </figure>
        </div>
        <div class="row">
            <div ng-repeat="list in listaactivos | filter:search">
                <figure class="col-xs-12 col-sm-4 col-md-3" data-toggle="modal" data-target={{list.id}}>
                    <br />
                    <img alt="{{list.titulo}}" class="img-responsive " src={{list.img}} />
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="app-section2">
    <div class="container">
        <div class="row">
                <figure class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" data-toggle="modal" data-target=".bs-example-modal-lg">
                <br />
                <img alt="" class="img-responsive " src="Img/Proyectos/Etiquetas/finalizados.png" />
            </figure>
        </div>
        <div class="row">
            <div ng-repeat="list in listafinalizados">
            <figure class="col-xs-12 col-sm-4 col-md-3">
                <br />
                <img alt="" class="img-responsive " src={{list.img}} />
            </figure>
        </div>
    </div>
</section>
    </div>
<section ng-controller="ProyectoController">
    <div class="modal fade" id={{x.id}} tabindex="-1" role="dialog" ng-repeat="x in proyectos">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content stlMetro">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="gridSystemModalLabel">{{x.titulo}}</h3>
            </div>
            <div class="modal-body">
                <figure class="col-xs-12 col-sm-6 col-md-4">
                    <img alt="" class="img-responsive " src="{{x.img}}" />
                </figure>
                <article class="text-justify">
                        {{x.descripcion}}
                </article>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default stlMetro" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-default stlMetro btnBlue" data-dismiss="modal">Leer</button>
            </div>
        </div>
        </div>
    </div>
</section>
<?php
    require 'footer.php'
?>
