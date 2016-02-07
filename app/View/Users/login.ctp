<div class="main-login col-sm-4 col-sm-offset-4">
    <div class="logo">
        <?php
            echo $this->Html->image('logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png',
                    ['style' => 'max-width:200px;max-height:200px;']);
        ?>
        <br/>SIGA<i class="clip-clip"></i>UEM
    </div>
    <!-- start: LOGIN BOX -->
    <div class="box-login">
        <h3>Sistema de Gestão Académica</h3>
        <p>
            Por favor introduza o seu email institucional e a sua senha do SIGA
        </p>
        <?php echo $this->Form->create('User', ['url' => ['action' => 'login'], 'class' => 'form-login']); ?>

        <div class="errorHandler alert alert-danger no-display">
            <i class="fa fa-remove-sign"></i> Erro no Login, por favor corrija os dados abaixo
        </div>
        <fieldset>
            <div class="form-group">
				<span class="input-icon">
					<?php echo $this->Form->input('username', [
                            'div'         => false,
                            'label'       => false,
                            'class'       => 'form-control',
                            'placeholder' => 'Nome de Usuario ou Email Institucional',
                    ]) ?>

                    <i class="fa fa-user"></i> </span>
            </div>
            <div class="form-group form-actions">
				<span class="input-icon">
					<?php echo $this->Form->input('password', [
                            'div'         => false,
                            'label'       => false,
                            'class'       => 'form-control passwordl',
                            'placeholder' => 'Senha',
                    ]) ?>

                    <i class="fa fa-lock"></i>
                    <!--<a class="forgot" href="#">
                        Esqueci a minha senha
                    </a>--> </span>
            </div>
            <div class="form-actions">
                <?php echo $this->Form->end(['label'  => __('Entrar'),
                                             'class'  => 'btn btn-green pull-right',
                                             'escape' => false,
                ]) ?>
                <?php echo $this->Html->link('Ir para o Email', 'https://www.google.com/a/uem.ac.mz/',
                        ['class' => '', 'target' => 'blank']) ?>


            </div>
            <!--	<div class="new-account">
                    Nao possui uma conta no SIGA?
                    <a href="#" class="register">
                        Solicite uma conta SIGA!
                    </a>
                </div>-->
        </fieldset>
        </form>
    </div>
    <!-- end: LOGIN BOX -->
    <!-- start: FORGOT BOX
    <div class="box-forgot">
        <h3>Forget Password?</h3>
        <p>
            Enter your e-mail address below to reset your password.
        </p>
        <form class="form-forgot">
            <div class="errorHandler alert alert-danger no-display">
                <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
            </div>
            <fieldset>
                <div class="form-group">
                    <span class="input-icon">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <i class="fa fa-envelope"></i> </span>
                </div>
                <div class="form-actions">
                    <button class="btn btn-light-grey go-back">
                        <i class="fa fa-circle-arrow-left"></i> Back
                    </button>
                    <button type="submit" class="btn btn-bricky pull-right">
                        Submit <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- end: FORGOT BOX -->
    <!-- start: REGISTER BOX
    <div class="box-register">
        <h3>Sign Up</h3>
        <p>
            Enter your personal details below:
        </p>
        <form class="form-register">
            <div class="errorHandler alert alert-danger no-display">
                <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
            </div>
            <fieldset>
                <div class="form-group">
                    <input type="text" class="form-control" name="full_name" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="city" placeholder="City">
                </div>
                <div class="form-group">
                    <div>
                        <label class="radio-inline">
                            <input type="radio" class="grey" value="F" name="gender">
                            Female
                        </label>
                        <label class="radio-inline">
                            <input type="radio" class="grey" value="M" name="gender">
                            Male
                        </label>
                    </div>
                </div>
                <p>
                    Enter your account details below:
                </p>
                <div class="form-group">
                    <span class="input-icon">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <i class="fa fa-envelope"></i> </span>
                </div>
                <div class="form-group">
                    <span class="input-icon">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <i class="fa fa-lock"></i> </span>
                </div>
                <div class="form-group">
                    <span class="input-icon">
                        <input type="password" class="form-control" name="password_again" placeholder="Password Again">
                        <i class="fa fa-lock"></i> </span>
                </div>
                <div class="form-group">
                    <div>
                        <label for="agree" class="checkbox-inline">
                            <input type="checkbox" class="grey agree" id="agree" name="agree">
                            I agree to the Terms of Service and Privacy Policy
                        </label>
                    </div>
                </div>
                <div class="form-actions">
                    <button class="btn btn-light-grey go-back">
                        <i class="fa fa-circle-arrow-left"></i> Back
                    </button>
                    <button type="submit" class="btn btn-bricky pull-right">
                        Submit <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- end: REGISTER BOX -->
    <!-- start: COPYRIGHT -->
    <div class="copyright">
        <?php echo $this->Element('copyright') ?>
    </div>
    <!-- end: COPYRIGHT -->
</div>

