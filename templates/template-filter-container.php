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
                    <option value=""><?php _e('Cualquier Tipo', 'balearic'); ?></option>
                    <option value="piso"><?php _e('Piso', 'balearic'); ?></option>
                    <option value="chalet"><?php _e('Casas o Chalets', 'balearic'); ?></option>
                    <option value="rustico"><?php _e('Casas rústicas', 'balearic'); ?></option>
                    <option value="duplex"><?php _e('Dúplex', 'balearic'); ?></option>
                    <option value="aticos"><?php _e('Áticos', 'balearic'); ?></option>
                    <option value="castillos"><?php _e('Castillos', 'balearic'); ?></option>
                </select>
            </div>
            <div class="filter-content-item col-xl col-lg col-md col-sm-12 col-12">
                <label for="bhm_local_price"><?php _e('Precio', 'balearic'); ?></label>
                <select tname="bhm_local_price" id="bhm_local_price" class="form-control filter-form-control">
                    <option value="" selected><?php _e('Cualquier Precio', 'balearic'); ?></option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                    <option value="300">300</option>
                    <option value="400">400</option>
                    <option value="500">500</option>
                    <option value="600">600</option>
                    <option value="700">700</option>
                    <option value="800">800</option>
                    <option value="900">900</option>
                    <option value="1000">1000</option>
                    <option value="1100">1100</option>
                    <option value="1200">1200</option>
                    <option value="1300">1300</option>
                    <option value="1400">1400</option>
                    <option value="1500">1500</option>
                    <option value="1600">1600</option>
                    <option value="1700">1700</option>
                    <option value="1800">1800</option>
                    <option value="1900">1900</option>
                    <option value="2000">2000</option>
                    <option value="2100">2100</option>
                    <option value="mas"><?php _e('Más', 'balearic'); ?></option>
                </select>
            </div>
            <div class="filter-content-item col-xl col-lg col-md col-sm-12 col-12">
                <label for="bhm_local_size"><?php _e('Tamaño', 'balearic'); ?></label>
                <input type="number" name="bhm_local_size" id="bhm_local_size" class="form-control filter-form-control" />
            </div>
            <div class="filter-content-item col-xl col-lg col-md col-sm-12 col-12">
                <label for="bhm_local_room"><?php _e('Habitaciones', 'balearic'); ?></label>
                <select name="bhm_local_room" id="bhm_local_room" class="form-control filter-form-control">
                    <option value="" selected><?php _e('Cualquier Cantidad', 'balearic'); ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="mas"><?php _e('Más', 'balearic'); ?></option>
                </select>
            </div>
            <div class="filter-content-item col-xl col-lg col-md col-sm-12 col-12">
                <label for="bhm_local_bath"><?php _e('Baños', 'balearic'); ?></label>
                <select name="bhm_local_bath" id="bhm_local_bath" class="form-control filter-form-control">
                    <option value="" selected><?php _e('Cualquier Cantidad', 'balearic'); ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="mas">Más</option>
                </select>
            </div>
            <div class="filter-content-item col-xl col-lg col-md col-sm-12 col-12">
                <label for="bhm_local_equip"><?php _e('Equipamiento', 'balearic'); ?></label>
                <select name="bhm_local_equip" id="bhm_local_equip" class="form-control filter-form-control">
                    <option value="" selected><?php _e('Cualquier Modalidad', 'balearic'); ?></option>
                    <option value="none"><?php _e('Indiferente', 'balearic'); ?></option>
                    <option value="amueblado"><?php _e('Amueblado', 'balearic'); ?></option>
                    <option value="cocina"><?php _e('Solo cocina amueblada', 'balearic'); ?></option>
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