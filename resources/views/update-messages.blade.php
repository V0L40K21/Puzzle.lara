@if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Редактирование</h1>
    <form action="{{ route('home-update-submit', $data->id) }}" method="post">
        @csrf
        <label for="name">Введите имя</label>
        <input type="text" name="name" placeholder="Введите имя" id="name" value="{{ $data->name }}">

        <label for="email">Введите email</label>
        <input type="email" name="email" placeholder="Введите email" id="email" value="{{ $data->email }}">

        <label for="subject">Тема сообщения</label>
        <input type="text" name="subject" placeholder="Тема сообщения" id="subject" value="{{ $data->subject }}">

        <label for="message">Введите сообщение</label>
        <textarea name="message" id="message" placeholder="Введите сообщение">{{ $data->message }}</textarea>
        <button type="submit">Обновить</button>
    </form>