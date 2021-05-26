<form id="filterForm" class="main-filter-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="container-fluid mobile-filter-title d-xl-none d-lg-none d-md-none d-sm-block d-block">
        <div class="row align-items-center justify-content-between">
            <div class="col filter-title"><?php _e('Filtros')?></div>
            <div class="col filter-button"><a id="filterBtnMobile"><i class="fa fa-bars"></i></a></div>
        </div>
    </div>
    <div id="filterContainer" class="container-fluid mobile-filter-hidden">
        <div class="row align-items-center">
            <div class="filter-content-item col-xl col-lg col-md col-sm-12 col-12">
                <label for="s"><?php _e('Busqueda Sencilla', 'balearic'); ?></label>
                <input type="search" id="s" name="s" value="" class="form-control filter-form-control" placeholder="<?php _e('ID o Nombre', 'balearic'); ?>" aria-label="<?php _e('ID o Nombre', 'balearic'); ?>" aria-describedby="searchsubmit">
            </div>
            <div class="filter-content-item col-xl col-lg col-md col-sm-12 col-12">
                <label for="bhm_local_type"><?php _e('Tipo de Propiedad', 'balearic'); ?></label>
                <select name="bhm_local_type" id="bhm_local_type" class="form-control filter-form-control">
                    <option value="">Cualquier Tipo</option>
                    <option value="piso">Piso</option>
                    <option value="chalet">Casas o Chalets</option>
                    <option value="rustico">Casas rústicas</option>
                    <option value="duplex">Dúplex</option>
                    <option value="aticos">Áticos</option>
                    <option value="castillos">Castillos</option>
                </select>
            </div>
            <div class="filter-content-item col-xl col-lg col-md col-sm-12 col-12">
                <label for="bhm_local_price"><?php _e('Precio', 'balearic'); ?></label>
                <input type="number" name="bhm_local_price" id="bhm_local_price" class="form-control filter-form-control" value="200" />
            </div>
            <div class="filter-content-item col-xl col-lg col-md col-sm-12 col-12">
                <label for="bhm_local_size"><?php _e('Tamaño', 'balearic'); ?></label>
                <input type="number" name="bhm_local_size" id="bhm_local_size" class="form-control filter-form-control" value="10" />
            </div>
            <div class="filter-content-item col-xl col-lg col-md col-sm-12 col-12">
                <label for="bhm_local_room"><?php _e('Habitaciones', 'balearic'); ?></label>
                <select name="bhm_local_room" id="bhm_local_room" class="form-control filter-form-control">
                    <option value="">Cualquier Cantidad</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="mas">Más</option>
                </select>
            </div>
            <div class="filter-content-item col-xl col-lg col-md col-sm-12 col-12">
                <label for="bhm_local_bath"><?php _e('Baños', 'balearic'); ?></label>
                <select name="bhm_local_bath" id="bhm_local_bath" class="form-control filter-form-control">
                    <option value="">Cualquier Cantidad</option>
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="mas">Más</option>
                </select>
            </div>
            <div class="filter-content-item col-xl col-lg col-md col-sm-12 col-12">
                <label for="bhm_local_equip"><?php _e('Equipamiento', 'balearic'); ?></label>
                <select name="bhm_local_equip" id="bhm_local_equip" class="form-control filter-form-control">
                    <option value="" selected>Cualquier Modalidad</option>
                    <option value="none">Indiferente</option>
                    <option value="amueblado">Amueblado</option>
                    <option value="cocina">Solo cocina amueblada</option>
                </select>
            </div>
            <div class="filter-content-item col-xl col-lg col-md col-sm-12 col-12">
                <button id="filterBtn" type="submit" class="btn btn-md btn-search"><?php _e('Buscar', 'balearic'); ?></button>
            </div>
        </div>
    </div>
</form>
<div class="filter-loader col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div id="loaderFilter" class="loader-css d-none"></div>
</div>