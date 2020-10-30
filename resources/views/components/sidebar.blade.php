<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <h3>Sidebar Component</h3>
    <p>{{ $title }}</p>
    <p>Email: {{ $email }}</p>
    @foreach($users() as $user)
        <p><small>{{ $user }}</small></p>
    @endforeach
</div>