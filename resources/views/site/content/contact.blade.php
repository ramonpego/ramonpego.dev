@extends('site.layout')

@section('content')
    <div class="div__wrapper">
        <div class="container__">
            <div class="div__form">
                <form class="form__" action="" method="POST" id="form_contato" enctype="multipart/form-data">
                    <fieldset class="fieldset__">
                        <div class="form__row">
                            <div class="form__item">
                                <div class="form-group">
                                    <label for="nome"> <small class="form-text" id="info_nome"> * </small> Nome </label>
                                    <input class="form-control" id="nome" placeholder="Nome..." type="text" name="nome" required aria-describedby="info_nome">
                                </div>
                            </div>
                        </div>

                        <div class="form__row">
                            <div class="form__item">
                                <div class="form-group">
                                    <label for="email"> <small class="form-text" id="info_email"> * </small> E-mail </label>
                                    <input class="form-control" id="email" placeholder="E-mail..." type="email" name="email" required aria-describedby="info_email">
                                </div>
                            </div>
                        </div>

                        <div class="form__row">
                            <div class="form__item">
                                <div class="form-group">
                                    <label for="telefone"> <small class="form-text" id="info_telefone"> * </small> Telefone </label>
                                    <input class="form-control" id="telefone" placeholder="Telefone..." type="tel" name="telefone" maxlength="12" required aria-describedby="info_telefone">
                                </div>
                            </div>
                        </div>

                        <div class="form__row">
                            <div class="form__item">
                                <div class="form-group">
                                    <label for="mensagem"> <small class="form-text" id="info_mensagem"> * </small> Mensagem </label>
                                    <textarea class="form-control" id="mensagem" placeholder="Menssagem..." name="mensagem" rows="8" required aria-describedby="info_mensagem"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form__row">
                            <div class="form__item right__">
                                <button type="submit" class="button__solid color__effect" name="BTEnvia">
                                    <span> Enviar </span>
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection

