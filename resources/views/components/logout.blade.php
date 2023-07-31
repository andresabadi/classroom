<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="botonAzul logout" type="submit">
        Log out<i class="fa-solid fa-arrow-right-from-bracket"></i>
    </button>
</form>