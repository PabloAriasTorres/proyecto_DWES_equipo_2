class Usuario {
    private $login;
    private $password;
    private $nombre;
    private $apellidos;
    private $karma;

    public function __construct($login, $password, $nombre, $apellidos, $karma) {
        $this->login = $login;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->karma = $karma;
    }

    // Getters
    public function getLogin() {
        return $this->login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getKarma() {
        return $this->karma;
    }

    // Setters
    public function setLogin($login) {
        $this->login = $login;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setKarma($karma) {
        $this->karma = $karma;
    }
}
function altaUsuario () {
    
}