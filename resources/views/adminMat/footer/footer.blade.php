<footer class="footer">
    <div class="div_footer">
        <div class="div_copy_cliente">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"> Termos </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> Sobre </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> Mapa </a>
                </li>
            </ul>
        </div>

        <div class="div_copy_empresa">
            <span class="text_sm"> Design & direitos &copy; <span class="text_sm" data-toggle="modal" data-target="#modalPadrao"> Matheus Ramalho </span> </span>
        </div>
    </div>
</footer>

<!-- MODAL -->
<div class="modal fade modal_padrao" id="modalPadrao" tabindex="-1" aria-labelledby="modalPadraoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <img src="{{ asset('assets/svgs/dev1.svg') }}" alt=".">

                <a class="close link_action" href="#" data-dismiss="modal" aria-label="Close">
                    <i class="icon ui-1_simple-remove"></i>
                </a>
            </div>

            <div class="modal-body">
                <div class="div_title">
                    <h4 class="title"> Modal Padrão </h4>
                    <p class="text_sm"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. At non molestias error dolore, suscipit alias quae soluta eligendi a quaerat maiores magnam sequi iusto eum commodi quo eaque explicabo! Optio!. </p>
                </div>

                @include('adminMat.partials.redes_sociais')
            </div>
        </div>
    </div>
</div>
