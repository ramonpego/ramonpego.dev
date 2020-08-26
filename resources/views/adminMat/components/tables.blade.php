@extends('adminMat.layout')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card_content">
                <div class="card_header">
                    <h5 class="title"> Tables </h5>
                    <a class="link_action link_table" href="{{ route('dashboard') }}"> <i class="icon arrows-1_minimal-left"></i> </a>
                </div>

                <div class="card_body">
                    <h6 class="text_variant"> # Table - DataTable </h6>
                    <div class="bloco">
                        <!-- DATATABLE -->
                        <div class="datatable">
                            <!-- HEADER -->
                            <div class="datatable_header">
                                <div class="datatable_filter">
                                    <div class="datatable_filter_items">
                                        <label for=""> Status: </label>
                                        <div class="form-group">
                                            <select class="form-control" id="">
                                                <option value=""> Todos </option>
                                                <option value="1"> Pending </option>
                                                <option value="2"> Delivered </option>
                                                <option value="3"> Canceled </option>
                                                <option value="4"> Success </option>
                                                <option value="5"> Info </option>
                                                <option value="6"> Danger </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="datatable_filter_items">
                                        <label for=""> Type: </label>
                                        <div class="form-group">
                                            <select class="form-control" id="">
                                                <option value=""> Todos </option>
                                                <option value="1"> Online </option>
                                                <option value="2"> Retail </option>
                                                <option value="3"> Direct </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="datatable_filter_items">
                                        <form class="form-inline">
                                            <input id="search" class="form-control" type="search" aria-label="Pesquisar" placeholder="Pesquisar...">
                                            <button class="button button_solid_mat" type="submit"> Pesquisar </button>
                                        </form>
                                    </div>
                                </div>

                                <div class="datatables_export">
                                    <div class="dropdown">
                                        <button class="button button_padrao dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Exportar </button>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> Print </a>
                                            <a class="dropdown-item" href="#"> Copy </a>
                                            <a class="dropdown-item" href="#"> Excel </a>
                                            <a class="dropdown-item" href="#"> CSV </a>
                                            <a class="dropdown-item" href="#"> PDF </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- BODY (Table) -->
                            <table class="datatable_table">
                                <thead class="datatable_head">
                                    <tr class="datatable_row">
                                        <th class="datatable_item datatable_item_check">
                                            <span>
                                                <div class="checkbox_ custom-control custom-checkbox">
                                                    <input id="check" type="checkbox" class="custom-control-input">
                                                    <label for="check" class="custom-control-label"> </label>
                                                </div>
                                            </span>
                                        </th>

                                        <th class="datatable_item">
                                            <span> ID </span>
                                        </th>

                                        <th class="datatable_item">
                                            <span> Date </span>
                                        </th>

                                        <th class="datatable_item">
                                            <span> Name </span>
                                        </th>

                                        <th class="datatable_item">
                                            <span> Status </span>
                                        </th>

                                        <th class="datatable_item">
                                            <span> Actions </span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="datatable_body">
                                    <tr class="datatable_row">
                                        <td class="datatable_item datatable_item_check" data-field="RecordID" aria-label="1">
                                            <span>
                                                <div class="checkbox_ custom-control custom-checkbox">
                                                    <input id="check" type="checkbox" class="custom-control-input">
                                                    <label for="check" class="custom-control-label"> </label>
                                                </div>
                                            </span>
                                        </td>

                                        <td class="datatable_item" data-field="OrderID" aria-labelledby="0374-5070">
                                            <span> 0374-5070 </span>
                                        </td>

                                        <td class="datatable_item" data-field="ShipDate" aria-labelledby="8/27/2017">
                                            <span> 8/27/2017 </span>
                                        </td>

                                        <td class="datatable_item" data-field="CompanyName" aria-labelledby="Kris-Wehner">
                                            <span> Kris-Wehner </span>
                                        </td>

                                        <td class="datatable_item" data-field="Status" aria-labelledby="status">
                                            <span>
                                                <span class="badge"> Danger </span>
                                            </span>
                                        </td>

                                        <td class="datatable_item" data-field="Actions" aria-label="null">
                                            <span class="datatable_button">
                                                <a href="#" class="link_action link_table"> <i class="icon arrows-1_triangle-up-19"></i> </a>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="datatable_row">
                                        <td class="datatable_item datatable_item_check" data-field="RecordID" aria-label="1">
                                            <span>
                                                <div class="checkbox_ custom-control custom-checkbox">
                                                    <input id="check" type="checkbox" class="custom-control-input">
                                                    <label for="check" class="custom-control-label"> </label>
                                                </div>
                                            </span>
                                        </td>

                                        <td class="datatable_item" data-field="OrderID" aria-labelledby="0374-5070">
                                            <span> 0374-5070 </span>
                                        </td>

                                        <td class="datatable_item" data-field="ShipDate" aria-labelledby="8/27/2017">
                                            <span> 8/27/2017 </span>
                                        </td>

                                        <td class="datatable_item" data-field="CompanyName" aria-labelledby="Kris-Wehner">
                                            <span> Kris-Wehner </span>
                                        </td>

                                        <td class="datatable_item" data-field="Status" aria-labelledby="status">
                                            <span>
                                                <span class="badge badge_danger"> Danger </span>
                                            </span>
                                        </td>

                                        <td class="datatable_item" data-field="Actions" aria-label="null">
                                            <span class="datatable_button">
                                                <a href="#" class="button_icon button_icon_outline_primary link_table"> <i class="icon arrows-1_triangle-up-19"></i> </a>
                                                <a href="#" class="button_icon button_icon_outline_warning link_table"> <i class="icon arrows-1_triangle-up-19"></i> </a>
                                                <a href="#" class="button_icon button_icon_outline_danger link_table"> <i class="icon arrows-1_triangle-up-19"></i> </a>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- FOOTER -->
                            <div class="datatable_footer">
                                <ul class="datatable_footer_nav">
                                    <li>
                                        <a title="First" class="datatable_footer_link datatable_footer_link_first datatable_footer_link_disabled" data-page="1" disabled="disabled">
                                            <i class="icon arrows-1_double-left"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a title="Previous" class="datatable_footer_link datatable_footer_link_prev datatable_footer_link_disabled" data-page="1" disabled="disabled">
                                            <i class="icon arrows-1_minimal-left"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="datatable_footer_link datatable_footer_link_number datatable_footer_link_active" data-page="1" title="1"> 1 </a>
                                    </li>

                                    <li>
                                        <a title="Next" class="datatable_footer_link datatable_footer_link_next" data-page="2">
                                            <i class="icon arrows-1_minimal-right"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a title="Last" class="datatable_footer_link datatable_footer_link_last" data-page="10">
                                            <i class="icon arrows-1_double-right"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="datatable_footer_info">
                                    <select class="form-control datatable_footer_size" id="">
                                        <option value="10" selected> 10 </option>
                                        <option value="20"> 20 </option>
                                        <option value="30"> 30 </option>
                                        <option value="50"> 50 </option>
                                        <option value="100"> 100 </option>
                                    </select>

                                    <span class="datatable_footer_detail"> Mostrando 1 - 10 de 100 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
