<html>
    <form action="{{url('/test')}}" method="POST">
        @csrf
        <input type="text" name="email">
        <input type="text" name="name">
        <input type="text" name="password">
        <button>submit</button>
    </form>
</html>