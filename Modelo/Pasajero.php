<?php
class Pasajero {
    protected int $idVuelo;
    protected string $nombre;
    protected string $linea;
    protected int $pasajeros;

    public function getIdVuelo(): int {
        return $this->idVuelo;
    }

    public function setIdVuelo(int $idVuelo): self {
        $this->idVuelo = $idVuelo;
        return $this;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self {
        $this->nombre = $nombre;
        return $this;
    }

    public function getLinea(): string {
        return $this->linea;
    }

    public function setLinea(string $linea): self {
        $this->linea = $linea;
        return $this;
    }

    public function getPasajeros(): int {
        return $this->pasajeros;
    }

    public function setPasajeros(int $pasajeros): self {
        $this->pasajeros = $pasajeros;
        return $this;
    }
}
?>
