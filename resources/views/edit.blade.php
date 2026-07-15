<form action="{{ route('posts.update', $post->id) }}" method="POST">
    <!-- Protection CSRF obligatoire en Laravel -->
    @csrf 
    
    <!-- Simulation de la méthode PUT pour Laravel -->
    @method('PUT') 

    <label for="name">Titre :</label>
    <input type="text" name="name" id="name" value="{{ old('name', $post->namename) }}">

    <label for="description">description :</label>
    <textarea name="description" id="description">{{ old('description', $post->description) }}</textarea>

    <label for="price">price :</label>
    <input type="number">

    <button type="submit">Save</button>
</form>