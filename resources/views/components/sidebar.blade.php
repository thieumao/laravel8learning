<div {{ $attributes->merge(['class' => 'test-class']) }}>
    <h3>Sidebar Component</h3>
    <p>{{ $title }}</p>
    <p>Email: {{ $email }}</p>
    @foreach($users('Nguyễn Văn C') as $user)
        <p><small>{{ $user }}</small></p>
    @endforeach
</div>