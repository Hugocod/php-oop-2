<?php

        require_once __DIR__ . '/../mainClasses/product.php'; // importo la classe che andrà inclusa nelle classi extended

        class FoodProduct extends Product{

                ///////////////////////////////////////////////////////////////////////////////////////////////// SPECIFIC ATTRIBUTE
                //Attributi specifici(necessari per FoodProduct) 
                public $weight;
                public $shelf_life;
                public $ingredients;
                ///////////////////////////////////////////////////////////////////////////////////////////////// - / SPECIFIC ATTRIBUTE

                function __construct( $_weight, $_shelf_life, $_ingredients)
                {
                    $this -> weight = $_weight;
                    $this -> shelf_life = $_shelf_life;
                    $this -> ingredients = $_ingredients;
                }

        }


        class ToyProduct extends Product{

            ///////////////////////////////////////////////////////////////////////////////////////////////// SPECIFIC ATTRIBUTE
            //Attributi specifici(necessari per ToyProduct) 
            public $target_species;
            public $toy_type;
            public $material;
            ///////////////////////////////////////////////////////////////////////////////////////////////// - / SPECIFIC ATTRIBUTE

            function __construct( $_target_species, $_toy_type, $_material)
            {
                $this -> target_species = $_target_species;
                $this -> toy_type = $_toy_type;
                $this -> material = $_material;
            }

        }

        class DogHomeProduct extends Product{

            ///////////////////////////////////////////////////////////////////////////////////////////////// SPECIFIC ATTRIBUTE
            //Attributi specifici(necessari per DogHomeProduct) 
            public $style;
            public $color;
            public $material;
            ///////////////////////////////////////////////////////////////////////////////////////////////// - / SPECIFIC ATTRIBUTE

            function __construct( $_style, $_color, $_ingredients)
            {
                $this -> style = $_style;
                $this -> color = $_color;
                $this -> ingredients = $_ingredients;
            }

        }

?>