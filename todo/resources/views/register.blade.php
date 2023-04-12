<x-layout page="Crie sua conta">
             <x-slot:btn>
                <a href="{{route('login')}}" class="btn btn-primary">
                   Já tem uma conta? Faça login
                </a>
             </x-slot:btn>

      
    <section id="task_section">
            <h1>Crie sua conta</h1>

            @if ($errors->any())
               <ul class="alert alert-error">
                  @foreach ($errors->all() as $error)

                  <li>{{$error}}</li>
                     
                  @endforeach
               </ul>
            @endif
            <form action="{{route('user.register_action')}}" method="POST">
                @csrf
                <x-form.text_input 
                name="name" 
                label="Nome"
                placeholder="Insira o seu nome"/>
               
                <x-form.text_input 
                name="email"
                type="email" 
                label="E-mail"
                placeholder="Insira o seu e-mail"/>

                <x-form.text_input 
                name="password"
                type="password" 
                label="Senha"
                placeholder=""/>

                 <x-form.text_input 
                name="password_confirmation"
                type="password" 
                label="Confirme sua senha"
                placeholder=""/>

                <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se" style="margin-right:50px; "/>
            </form>
    </section>
</x-layout>