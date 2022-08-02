<x-layout page="Criação de tarefa">
             <x-slot:btn>
                <a href="{{route('home')}}" class="btn btn-primary">
                    Voltar
                </a>
             </x-slot:btn>
      
        <section id="task_section">
            <h1>Criar Tarefa</h1>

            <form action="{{route('task.create_action')}}" method="POST">
                @csrf
                <x-form.text_input 
                name="title" 
                label="Título da tarefa"
                placeholder="Digite o título da tarefa"/>

                <x-form.text_input 
                name="due_date" 
                type="datetime-local" 
                label="Data de Realização"
                placeholder="Escolha a data da sua tarefa"/>

                <x-form.select_input 
                name="category_id" 
                label="Categoria"
                placeholder="Escolha a data da sua tarefa">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                    
                @endforeach
                </x-form.select_input>

                <x-form.textarea_input
                label="Descrição da tarefa"
                name="description"
                placeholder="Digite a descrição da tarefa"
                />

                <x-form.form_button resetTxt="Resetar" submitTxt="Criar tarefa"/>
            </form>
        </section>
</x-layout>