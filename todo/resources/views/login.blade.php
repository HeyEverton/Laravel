<x-layout page="Faça login">
             <x-slot:btn>
                <a href="{{route('register')}}" class="btn btn-primary">
                   Registre-se
                </a>
             </x-slot:btn>

      
    <section id="task_section">
            <h1>Faça o login</h1>

            @if ($errors->any())
               <ul class="alert alert-error">
                  @foreach ($errors->all() as $error)

                  <li>{{$error}}</li>
                     
                  @endforeach
               </ul>
            @endif
            <form action="{{route('user.login_action')}}" method="POST">
                @csrf
                
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


                <x-form.form_button resetTxt="Limpar" submitTxt="Entrar"/>
            </form>
    </section>
</x-layout>