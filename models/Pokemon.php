<?php
class Pokemon{
    private ?int $idPokemon;
    private string $nomEspece;
    private ?string $description;
    private string $typeOne;
    private ?string $typeTwo;
    private ?string $urlImg;

    // Constructeur de la classe Pokemon
    public function __construct(?int $idPokemon, string $nomEspece, ?string $description, string $typeOne, ?string $typeTwo, ?string $urlImg){
        $this->$idPokemon = $idPokemon;
        $this->$nomEspece = $nomEspece;
        $this->$description = $description;
        $this->$typeOne = $typeOne;
        $this->$typeTwo = $typeTwo;
        $this->$urlImg = $urlImg;
    }

    // Getter pour $idPokemon
    public function getIdPokemon(): ?int
    {
        return $this->idPokemon;
    }

    // Setter pour $idPokemon
    public function setIdPokemon(?int $idPokemon): void
    {
        $this->idPokemon = $idPokemon;
    }

    // Getter pour $nomEspece
    public function getNomEspece(): string
    {
        return $this->nomEspece;
    }

    // Setter pour $nomEspece
    public function setNomEspece(string $nomEspece): void
    {
        $this->nomEspece = $nomEspece;
    }

    // Getter pour $description
    public function getDescription(): ?string
    {
        return $this->description;
    }

    // Setter pour $description
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    // Getter pour $typeOne
    public function getTypeOne(): string
    {
        return $this->typeOne;
    }

    // Setter pour $typeOne
    public function setTypeOne(string $typeOne): void
    {
        $this->typeOne = $typeOne;
    }

    // Getter pour $typeTwo
    public function getTypeTwo(): ?string
    {
        return $this->typeTwo;
    }

    // Setter pour $typeTwo
    public function setTypeTwo(?string $typeTwo): void
    {
        $this->typeTwo = $typeTwo;
    }

    // Getter pour $urlImg
    public function getUrlImg(): ?string
    {
        return $this->urlImg;
    }

    // Setter pour $urlImg
    public function setUrlImg(?string $urlImg): void
    {
        $this->urlImg = $urlImg;
    }
}
?>