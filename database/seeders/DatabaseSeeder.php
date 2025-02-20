<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $questions = [
            [
              "question"=> "Quel est le nom de la colline la plus célèbre de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Duchère",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Fourvière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel monument antique domine la ville et offre une vue panoramique ?",
              "answers"=> [
                [
                  "answer"=> "La Basilique Notre-Dame de Fourvière",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Gros Horloge",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Musée des Confluences",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel est le nom des restaurants traditionnels lyonnais ?",
              "answers"=> [
                [
                  "answer"=> "Les Auberges",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Les Bouchons",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Les Cafés",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Les Bistros",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel célèbre plat sucré est originaire de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "La Ratatouille",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Truffe noire",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Salade Lyonnaise",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Tarte aux pralines",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Combien d’arrondissements compte la ville de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "9",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "8",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "7",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "6",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier historique est inscrit au patrimoine mondial de l'UNESCO ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "De quel personnage célèbre la statue se trouve sur la place Bellecour ?",
              "answers"=> [
                [
                  "answer"=> "Louis XIV",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Napoléon Bonaparte",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "12 jours",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Jean de La Fontaine",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel est le nom du célèbre quartier des affaires et du shopping de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel grand événement annuel se déroule chaque année à Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Festival de Cannes",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Fête de la Musique",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Foire de Paris",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Biennale de Lyon",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel est le nom du célèbre parc animalier et botanique de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Parc de la Tête d'Or",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Jardin des Plantes",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Parc Chambord",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Parc naturel régional du Pilat",
                  "is_correct"=> false
                ]
              ]
                ],
            [
              "question"=> "Quel est le nom du quartier moderne connu pour ses gratte-ciels et ses institutions internationales ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel musée retrace l'histoire de la ville et expose des vestiges gallo-romains ?",
              "answers"=> [
                [
                  "answer"=> "Le Musée des Confluences",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Musée des Beaux-Arts",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Musée gallo-romain de Fourvière",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Musée Miniature et Cinéma",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel festival international de cinéma se déroule chaque année à Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Festival de Cannes",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Festival Lumière",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Fête du Cinéma",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Festival du film francophone",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel grand festival de musique électronique se déroule à Lyon chaque année ?",
              "answers"=> [
                [
                  "answer"=> "Tomorrowland",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Printemps de Bourges",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Electrobeach",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Les Nuits Sonores",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel pont historique relie la Presqu'île au Vieux Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Pont de la Guillotière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Pont Bonaparte",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Pont Saint-Vincent",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Pont Raymond Poincaré",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "De quel style architectural est la Cathédrale Saint-Jean-Baptiste de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Roman",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Gothique",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Renaissance",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Baroque",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel jardin public offre une vue imprenable sur la ville et ses environs ?",
              "answers"=> [
                [
                  "answer"=> "Le Parc de la Tête d'Or",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Jardin des Plantes",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Parc de Miribel",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Parc Chambord",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier dynamique est connu pour sa vie nocturne et ses bars branchés ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Quartier des Terreaux",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la fleur d'oranger ?",
              "answers"=> [
                [
                  "answer"=> "La Praline",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Tarte aux pralines",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Brioche aux pralines",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Coucou de Lyon",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel événement annuel rassemble des milliers de coureurs dans les rues de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Marathon de Paris",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Marathon du Beaujolais",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Saint-Tricat",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Course des Lumières",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quelle est la devise officielle de la ville de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "\"Ut fortiter sic fideliter\"",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "\"Toujours fidèle\"",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "\"Lyon, ville Lumière\"",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "\"Labor omnia vincit\"",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel est le nom du stade de football de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Parc Olympique Lyonnais",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Stade de Gerland",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Matmut Atlantique",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Stadium",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quelle personnalité célèbre est née à Lyon et a marqué l'histoire de la ville ?",
              "answers"=> [
                [
                  "answer"=> "Jaques Brel",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Napoléon Bonapparte",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Jean-Baptiste Perrin",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Les frères Lumière",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses traboules, ces passages secrets reliant les immeubles ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel monument romain est l'un des vestiges les mieux conservés de la ville ?",
              "answers"=> [
                [
                  "answer"=> "Le Temple d'Auguste et de Livie",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Théâtre antique",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Les Amphithéâtres romains",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "L'Odéon",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "De quel style architectural est l'Hôtel de Ville de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Roman",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Gothique",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Renaissance",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Baroque",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier abrite de nombreux ateliers d'artisans et de boutiques de créateurs ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel événement gastronomique annuel met à l'honneur la cuisine lyonnaise ?",
              "answers"=> [
                [
                  "answer"=> "La Fête des Lumières",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Biennale de Lyon",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Beaujolais Nouveau",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Les Nuits Sonores",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quelle spécialité fromagère est originaire de la région lyonnaise ?",
              "answers"=> [
                [
                  "answer"=> "Le Bleu d'Auvergne",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Comté",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Mont d'or",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Reblochon",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel personnage historique a fondé la ville de Lyon en 43 av. J.-C. ?",
              "answers"=> [
                [
                  "answer"=> "Jules César",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Auguste",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Tibère",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Caligula",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quelle place centrale accueille la statue de Louis XIV et des événements importants ?",
              "answers"=> [
                [
                  "answer"=> "La Place Bellecour",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Place des Terreaux",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Place Carnot",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Place Saint-Jean",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses pentes et ses traboules, et offre une vue panoramique sur la ville ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel musée est consacré à l'histoire de la soie et de son industrie à Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Le Musée des Confluences",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Musée des Beaux-Arts",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Musée des Tissus et des Arts Décoratifs",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Musée Miniature et Cinéma",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel festival de musiques du monde se déroule chaque année à Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Les Nuits Sonores",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Festival Lumière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Festival Unlimited",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Les Francofolies",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Qu'est-ce que Linux ?",
              "answers"=> [
                [
                  "answer"=> "Un système d'exploration",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Un système d'orientation",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Un système d'opération",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Un système d'exploitation",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel pont moderne relie la Presqu'île à la Confluence ?",
              "answers"=> [
                [
                  "answer"=> "Le Pont de la Guillotière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Pont Bonaparte",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Pont Saint-Vincent",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Pont Raymond Poincaré",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel style architectural est caractéristique du quartier du Vieux Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Roman",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Gothique",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Renaissance",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Baroque",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel jardin botanique abrite une grande variété de plantes et de fleurs ?",
              "answers"=> [
                [
                  "answer"=> "Le Parc de la Tête d'Or",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Jardin des Plantes",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Parc de Miribel",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Parc Chambord",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier étudiant est connu pour son ambiance festive et ses nombreux bars ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Quartier des Cordeliers",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Qu'est-ce que Ytrack ?",
              "answers"=> [
                [
                  "answer"=> "Un site de pour traquer les heures",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Un site pour répertorier ses tâches",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Un site de cyber",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Un site pour apprendre de nouveaux langages de programmation",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Combien y a-t-il de quête sur Ytrack ?",
              "answers"=> [
                [
                  "answer"=> "8",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "7",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "9",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "10",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quelle est la devise latine de la famille de Guise, liée à l'histoire de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "\"Ut fortiter sic fideliter\"",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "\"Toujours fidèle\"",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "\"Lyon, ville Lumière\"",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "\"Qui s'y frotte s'y pique\"",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quelle spécialité culinaire lyonnaise est composée de quenelles de brochet et d'une sauce Nantua ?",
              "answers"=> [
                [
                  "answer"=> "La Salade Lyonnaise",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Gratin dauphinois",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Saucisson brioché",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Gratin de brochet à la Nantua",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses restaurants traditionnels et ses bouchons lyonnais ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel musée est consacré à l'histoire de la ville et à son patrimoine gallo-romain ?",
              "answers"=> [
                [
                  "answer"=> "Le Musée des Confluences",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Musée gallo-romain de Fourvière",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Musée des Beaux-Arts",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Musée des Tissus et des Arts Décoratifs",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Qu'est-ce qu'une piscine Golang ?",
              "answers"=> [
                [
                  "answer"=> "L'endroit où l'on peut nager",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Un mélange de mot",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Un ensemble d'exercice pour apprend le Golang",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Une piscine en forme de G",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel langage de programmation ont appris les étudiants ?",
              "answers"=> [
                [
                  "answer"=> "Le python",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le javascript",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le php",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Golang",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel grand centre commercial est situé dans le quartier de la Part-Dieu ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Centre Commercial Aéroville",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel est le nom du village médiéval situé sur les hauteurs de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Fourvière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Sainte-Genève",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Oingt",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Condrieu",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel style architectural est caractéristique du quartier de la Confluence ?",
              "answers"=> [
                [
                  "answer"=> "Roman",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Gothique",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Renaissance",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Contemporain",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel parc animalier héberge des animaux du monde entier ?",
              "answers"=> [
                [
                  "answer"=> "Le Parc de la Tête d'Or",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Jardin des Plantes",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Parc de Miribel",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Parc Chambord",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses nombreux étudiants et ses campus universitaires ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Quartier des Cordeliers",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Quartier de Gerland",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel est le nom de l’aéroport international de Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Aéroport Charles de Gaulle",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Aéroport Orly",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Aéroport de la Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Aéroport Saint-Exupéry",
                  "is_correct"=> true
                ]
              ]
            ],
            [
              "question"=> "Quel événement culturel majeur se déroule tous les deux ans à Lyon ?",
              "answers"=> [
                [
                  "answer"=> "La Biennale de Lyon",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Festival Lumière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Salon du Livre de Lyon",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Les Nuits Sonores",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel est le nom du célèbre tunnel romain reliant la Presqu'île à la Croix-Rousse ?",
              "answers"=> [
                [
                  "answer"=> "Le Pont de la Guillotière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Tunnel Traboule",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Pont Bonaparte",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Pont Raymond Poincaré",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel quartier est connu pour ses ateliers de soieries et son savoir-faire artisanal ?",
              "answers"=> [
                [
                  "answer"=> "La Confluence",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Part-Dieu",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Croix-Rousse",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Le Vieux Lyon",
                  "is_correct"=> false
                ]
              ]
            ],
            [
              "question"=> "Quel festival de danse contemporaine se déroule chaque année à Lyon ?",
              "answers"=> [
                [
                  "answer"=> "Les Nuits Sonores",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "Le Festival Lumière",
                  "is_correct"=> false
                ],
                [
                  "answer"=> "La Biennale de la Danse",
                  "is_correct"=> true
                ],
                [
                  "answer"=> "Les Francofolies",
                  "is_correct"=> false
                ]
              ]
            ],

              [
                "question"=> "Quel est le nom du quartier moderne connu pour ses gratte-ciels et ses institutions internationales ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Croix-Rousse",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel musée retrace l'histoire de la ville et expose des vestiges gallo-romains ?",
                "answers"=> [
                  [
                    "answer"=> "Le Musée des Confluences",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée des Beaux-Arts",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée gallo-romain de Fourvière",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Musée Miniature et Cinéma",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "La fête des Lumières de Lyon a lieu chaque année en quel mois  ?",
                "answers"=> [
                  [
                    "answer"=> "Février",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Décembre",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Mai",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Octobre",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle est la capitale de la région Auvergne-Rhône-Alpes ?",
                "answers"=> [
                  [
                    "answer"=> "Grenoble",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Vienne",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Annecy",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Lyon",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel pont historique relie la Presqu'île au Vieux Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Le Pont de la Guillotière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Pont Bonaparte",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Pont Saint-Vincent",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Pont Raymond Poincaré",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "De quel style architectural est la Cathédrale Saint-Jean-Baptiste de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Roman",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Gothique",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Renaissance",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Baroque",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel jardin public offre une vue imprenable sur la ville et ses environs ?",
                "answers"=> [
                  [
                    "answer"=> "Le Parc de la Tête d'Or",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Jardin des Plantes",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Parc de Miribel",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Parc Chambord",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Lyon possède deux fleuves. Le Rhône et… ?",
                "answers"=> [
                  [
                    "answer"=> "Le Tarn",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Garonne",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Seine",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Saône",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel personnage légendaire serait né à Lyon et est souvent évoqué dans les récits de la ville ?",
                "answers"=> [
                  [
                    "answer"=> "Gargantua",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Astérix",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Guignol",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Merlin",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel événement annuel rassemble des milliers de coureurs dans les rues de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Le Marathon de Paris",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Marathon du Beaujolais",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Saint-Tricat",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Course des Lumières",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel est le plus grand marché alimentaire de Lyon",
                "answers"=> [
                  [
                    "answer"=> "Le marché Saint-Antoine",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Les Halles de Lyon Paul Bocuse",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le marché de la Croix-Rousse",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le marché des Charpennes",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel célèbre chef cuisinier lyonnais a contribué à la renommée gastronomique de la ville ?",
                "answers"=> [
                  [
                    "answer"=> "Paul Bocuse",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Anne-Sophie Pic",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Joël Robuchon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Alain Ducasse",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle personnalité célèbre est née à Lyon et a marqué l'histoire de la ville ?",
                "answers"=> [
                  [
                    "answer"=> "Jaques Brel",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Napoléon Bonapparte",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Jean-Baptiste Perrin",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Les frères Lumière",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle grande institution culturelle est située à la place des Terreaux ?",
                "answers"=> [
                  [
                    "answer"=> "L’opéra de Lyon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le théâtre des Célestins",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le musée des beaux-arts",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le musée d’art contemporain",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel monument se trouve au sommet de la colline de Fourvière ?",
                "answers"=> [
                  [
                    "answer"=> "Le Temple d'Auguste et de Livie",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Basilique de Fourvière",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Les Théâtres antique",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> " La cathédrale Saint-Jean",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel est le nom de la tour emblématique de Lyon, surnommée le « Crayon » ?",
                "answers"=> [
                  [
                    "answer"=> "La tour Oxygène",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La tour Incity",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La tour Part-Dieu",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La tour Eiffel",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "QQuel est le principal quartier historique de Lyon, inscrit au patrimoine mondial de l’UNESCO ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Croix-Rousse",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel événement gastronomique annuel met à l'honneur la cuisine lyonnaise ?",
                "answers"=> [
                  [
                    "answer"=> "La Fête des Lumières",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Biennale de Lyon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Beaujolais Nouveau",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Les Nuits Sonores",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle place est le cœur de la presqu'île de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Place de l'Opéra",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Place des Terreaux",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Place Bellecour",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Place de la Concorde",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel célèbre événement gastronomique a lieu chaque année à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Le Sirah",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le salon du chocolat",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La route du Rhone",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Les nuits sonores",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle célèbre place de Lyon possède une statue équestre de Louis XIV ?",
                "answers"=> [
                  [
                    "answer"=> "La Place Bellecour",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Place des Terreaux",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Place Carnot",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Place Saint-Jean",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel quartier lyonnais est connu pour ses soyeux et ses canuts ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Croix-Rousse",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel musée est consacré à aux décors de cinéma à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Le Musée des Confluences",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée des Beaux-Arts",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée Lumière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée Miniature et Cinéma",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quelle gare de Lyon est la plus importante pour les voyages en train ",
                "answers"=> [
                  [
                    "answer"=> "La gare de Perrache",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La gare de Jean Macé",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La gare de Part-Dieu",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La gare de Vaise",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité culinaire lyonnaise que l'on sert en entrée ?",
                "answers"=> [
                  [
                    "answer"=> "La Salade Lyonnaise",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Gratin dauphinois",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saucisson brioché",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Les Tripoux à la lyonnaise",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel pont moderne est proche de la Cathédrale Saint-Jean Baptiste ?",
                "answers"=> [
                  [
                    "answer"=> "Le Pont de la Guillotière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Pont Bonaparte",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Pont Saint-Vincent",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Pont Raymond Poincaré",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel style architectural est caractéristique du quartier du Vieux Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Roman",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Gothique",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Renaissance",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Baroque",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel est le plus grand parc de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Le Parc de la Tête d'Or",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Jardin des Plantes",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Parc de Miribel",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Parc Chambord",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Dans quel quartier se situe le plus grand centre commercial de Lyon mais aussi de France ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Quartier des Cordeliers",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité est la spécialité de Lyon",
                "answers"=> [
                  [
                    "answer"=> "La Praline rose",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Brioche aux pralines",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Tarte aux pralines",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Coucou de Lyon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle île se trouve à la confluence du Rhône et de la Saône à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Île de la Cité",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Île Saint-Louis",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Île de Ré",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Île Barbe",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quelle est la hauteur approximative de la basilique de Fourvière ?",
                "answers"=> [
                  [
                    "answer"=> "130 mètres",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "86 mètres",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "48 mètres",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "150 mètres",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité culinaire lyonnaise est composée de quenelles de brochet et d'une sauce Nantua ?",
                "answers"=> [
                  [
                    "answer"=> "La Salade Lyonnaise",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Gratin dauphinois",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saucisson brioché",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Gratin de brochet à la Nantua",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses restaurants traditionnels et ses bouchons lyonnais ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Croix-Rousse",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel musée est consacré à l'histoire de la ville et à son patrimoine gallo-romain ?",
                "answers"=> [
                  [
                    "answer"=> "Le Musée des Confluences",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée gallo-romain de Fourvière",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Musée des Beaux-Arts",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée des Tissus et des Arts Décoratifs",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Qu'est-ce qu'une piscine Golang ?",
                "answers"=> [
                  [
                    "answer"=> "L'endroit où l'on peut nager",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Un mélange de mot",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Un ensemble d'exercice pour apprend le Golang",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Une piscine en forme de G",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel langage de programmation ont appris les étudiants ?",
                "answers"=> [
                  [
                    "answer"=> "Le python",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le javascript",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le php",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Golang",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel grand centre commercial est situé dans le quartier de la Part-Dieu ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Centre Commercial Aéroville",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel est le nom du village médiéval situé sur les hauteurs de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Fourvière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Sainte-Genève",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Oingt",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Condrieu",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel style architectural est caractéristique du quartier de la Confluence ?",
                "answers"=> [
                  [
                    "answer"=> "Roman",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Gothique",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Renaissance",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Contemporain",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel parc animalier héberge des animaux du monde entier ?",
                "answers"=> [
                  [
                    "answer"=> "Le Parc de la Tête d'Or",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Jardin des Plantes",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Parc de Miribel",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Parc Chambord",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses nombreux étudiants et ses campus universitaires ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Quartier des Cordeliers",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Quartier de Gerland",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité sucrée lyonnaise est parfumée à la fleur d'oranger et au rhum ?",
                "answers"=> [
                  [
                    "answer"=> "La Praline",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Tarte aux pralines",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Brioche aux pralines",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Coucou de Lyon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel événement culturel majeur se déroule tous les deux ans à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "La Biennale de Lyon",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Festival Lumière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Salon du Livre de Lyon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Les Nuits Sonores",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel est le nom du célèbre tunnel romain reliant la Presqu'île à la Croix-Rousse ?",
                "answers"=> [
                  [
                    "answer"=> "Le Pont de la Guillotière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Tunnel Traboule",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Pont Bonaparte",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Pont Raymond Poincaré",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses ateliers de soieries et son savoir-faire artisanal ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Croix-Rousse",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel festival de danse contemporaine se déroule chaque année à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Les Nuits Sonores",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Festival Lumière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Biennale de la Danse",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Les Francofolies",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle est la spécialité culinaire la plus célèbre de Lyon, servie dans les bouchons lyonnais ?",
                "answers"=> [
                  [
                    "answer"=> "La Salade Lyonnaise",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Gratin dauphinois",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saucisson brioché",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Bœuf à la lyonnaise",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "De quel royaume antique la ville de Lyon était-elle la capitale ?",
                "answers"=> [
                  [
                    "answer"=> "Les Gaulois",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Les Romains",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Les Burgondes",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Les Francs",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel empereur romain a séjourné à Lyon et y a fait construire un palais ?",
                "answers"=> [
                  [
                    "answer"=> "Jules César",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Auguste",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Tibère",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Caligula",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel événement historique important s'est déroulé à Lyon en 1672 ?",
                "answers"=> [
                  [
                    "answer"=> "La prise de la ville par les troupes françaises",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La signature du traité de Lyon",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La révolte des Canuts",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La construction du Pont de la Guillotière",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel personnage célèbre a été emprisonné à la prison de Saint-Joseph à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Jean-Baptiste Molière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Voltaire",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Olympe de Gouges",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "12 jours",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel monument historique de Lyon est classé au patrimoine mondial de l'UNESCO ?",
                "answers"=> [
                  [
                    "answer"=> "La Basilique Notre-Dame de Fourvière",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Musée des Confluences",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Parc de la Tête d'Or",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle est la devise officielle de la ville de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "\"Ut fortiter sic fideliter\"",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "\"Toujours fidèle\"",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "\"Lyon, ville Lumière\"",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "\"Labor omnia vincit\"",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel quartier de Lyon est connu pour ses traboules, ces passages secrets ?",
                "answers"=> [
                  [
                    "answer"=> "La Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Part-Dieu",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Vieux Lyon",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Croix-Rousse",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel musée retrace l'histoire de la ville et expose des vestiges gallo-romains ?",
                "answers"=> [
                  [
                    "answer"=> "Le Musée des Confluences",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée gallo-romain de Fourvière",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Musée des Beaux-Arts",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Musée des Tissus et des Arts Décoratifs",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle fête traditionnelle célèbre les lumignons et la Vierge Marie à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "La Fête des Lumières",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "La Fête du Beaujolais Nouveau",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Saint-Jean",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Les Assises de Lyon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel personnage historique a fondé l'imprimerie à Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Gutenberg",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Gutemberg",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Geoffroy Tory",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Robert Estienne",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité culinaire lyonnaise est composée de quenelles et d'une sauce béchamel ?",
                "answers"=> [
                  [
                    "answer"=> "La Salade Lyonnaise",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Gratin dauphinois",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saucisson brioché",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Saucisson à la lyonnaise",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel plat sucré lyonnais est parfumé à la fleur d'oranger ?",
                "answers"=> [
                  [
                    "answer"=> "La Praline",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Tarte aux pralines",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "La Brioche aux pralines",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Coucou de Lyon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle spécialité fromagère est originaire de la région lyonnaise ?",
                "answers"=> [
                  [
                    "answer"=> "Le Bleu d'Auvergne",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Comté",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Mont d'or",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Reblochon",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel vin rouge est produit dans les environs de Lyon ?",
                "answers"=> [
                  [
                    "answer"=> "Le Beaujolais",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Côtes du Rhône",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Hermitage",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Châteauneuf-du-Pape",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quelle est la boisson traditionnelle des bouchons lyonnais ?",
                "answers"=> [
                  [
                    "answer"=> "Le Beaujolais",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Côtes du Rhône",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Perrier",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Citron pressé",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel marché en plein air est réputé pour ses produits frais et locaux ?",
                "answers"=> [
                  [
                    "answer"=> "Le Marché Saint-Antoine",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Marché du Quai Saint-Vincent",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Le Marché de la Confluence",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Marché de la Croix-Rousse",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Qu'est-ce que Linux ?",
                "answers"=> [
                  [
                    "answer"=> "Un système d'exploration",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Un système d'orientation",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Un système d'opération",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Un système d'exploitation",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quelle fête gastronomique annuelle met à l'honneur la cuisine lyonnaise ?",
                "answers"=> [
                  [ "answer"=> "La Fête des Lumières", "is_correct"=> false ],
                  [ "answer"=> "La Biennale de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Beaujolais Nouveau", "is_correct"=> true ],
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel langage de programmation ont appris les étudiants ?",
                "answers"=> [
                  [
                    "answer"=> "Le python",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le javascript",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le php",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Le Golang",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel plat typique lyonnais est servi dans une cocotte en fonte ?",
                "answers"=> [
                  [ "answer"=> "La Salade Lyonnaise", "is_correct"=> false ],
                  [ "answer"=> "Le Gratin dauphinois", "is_correct"=> false ],
                  [ "answer"=> "Le Murgon", "is_correct"=> true ],
                  [ "answer"=> "Le Saucisson brioché", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle colline offre une vue panoramique sur la ville de Lyon ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "Fourvière", "is_correct"=> true ],
                  [ "answer"=> "La Croix-Rousse", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel monument religieux domine la ville et est accessible par un funiculaire ?",
                "answers"=> [
                  [ "answer"=> "La Basilique Notre-Dame de Fourvière", "is_correct"=> true ],
                  [ "answer"=> "Le Gros Horloge", "is_correct"=> false ],
                  [ "answer"=> "La Cathédrale Saint-Jean-Baptiste", "is_correct"=> false ],
                  [ "answer"=> "Le Musée des Confluences", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel jardin public abrite une grande variété de plantes et de fleurs ?",
                "answers"=> [
                  [ "answer"=> "Le Parc de la Tête d'Or", "is_correct"=> true ],
                  [ "answer"=> "Le Jardin des Plantes", "is_correct"=> false ],
                  [ "answer"=> "Le Parc de Miribel", "is_correct"=> false ],
                  [ "answer"=> "Le Parc Chambord", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel pont moderne relie la Presqu'île à la Confluence ?",
                "answers"=> [
                  [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Saint-Vincent", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Raymond Poincaré", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses pentes et ses traboules ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "La Croix-Rousse", "is_correct"=> true ],
                  [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel musée est consacré à l'histoire de la soie et de son industrie à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Le Musée des Confluences", "is_correct"=> false ],
                  [ "answer"=> "Le Musée gallo-romain de Fourvière", "is_correct"=> false ],
                  [ "answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false ],
                  [ "answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel stade de football accueille les matchs de l'Olympique Lyonnais ?",
                "answers"=> [
                  [ "answer"=> "Le Parc Olympique Lyonnais", "is_correct"=> true ],
                  [ "answer"=> "Le Stade de Gerland", "is_correct"=> false ],
                  [ "answer"=> "Le Matmut Atlantique", "is_correct"=> false ],
                  [ "answer"=> "Le Stadium", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle place centrale accueille la statue de Louis XIV et des événements importants ?",
                "answers"=> [
                  [ "answer"=> "La Place Bellecour", "is_correct"=> true ],
                  [ "answer"=> "La Place des Terreaux", "is_correct"=> false ],
                  [ "answer"=> "La Place Carnot", "is_correct"=> false ],
                  [ "answer"=> "La Place Saint-Jean", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel quartier étudiant est connu pour son ambiance festive et ses nombreux bars ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "Le Quartier des Cordeliers", "is_correct"=> true ],
                  [ "answer"=> "Le Quartier de Gerland", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel village médiéval situé sur les hauteurs de Lyon est célèbre pour ses maisons en pierre ?",
                "answers"=> [
                  [ "answer"=> "Fourvière", "is_correct"=> false ],
                  [ "answer"=> "Sainte-Genève", "is_correct"=> false ],
                  [ "answer"=> "Oingt", "is_correct"=> true ],
                  [ "answer"=> "Condrieu", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel festival de cinéma international se déroule chaque année à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> true ],
                  [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel festival de musiques du monde a lieu chaque été à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> true ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                  [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Qu'est-ce qu'une piscine Golang ?",
                "answers"=> [
                  [
                    "answer"=> "L'endroit où l'on peut nager",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Un mélange de mot",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Un ensemble d'exercice pour apprend le Golang",
                    "is_correct"=> true
                  ],
                  [
                    "answer"=> "Une piscine en forme de G",
                    "is_correct"=> false
                  ]
                ]
              ],
              [
                "question"=> "Quel festival de danse contemporaine se tient tous les deux ans à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                  [ "answer"=> "La Biennale de la Danse", "is_correct"=> true ],
                  [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel grand centre commercial est situé dans le quartier de la Part-Dieu ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> true ],
                  [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ],
                  [ "answer"=> "Le Centre Commercial Aéroville", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel musée est consacré à l'histoire de la résistance et de la déportation pendant la Seconde Guerre mondiale ?",
                "answers"=> [
                  [ "answer"=> "Le Musée des Confluences", "is_correct"=> false ],
                  [ "answer"=> "Le Musée national de la Résistance et de la Déportation", "is_correct"=> true ],
                  [ "answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false ],
                  [ "answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel quartier est connu pour ses nombreux ateliers d'artisans et de boutiques de créateurs ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "La Croix-Rousse", "is_correct"=> true ],
                  [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel événement sportif international se déroule tous les quatre ans à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Le Marathon de Paris", "is_correct"=> false ],
                  [ "answer"=> "Le Tour de France", "is_correct"=> false ],
                  [ "answer"=> "La Coupe du Monde de football", "is_correct"=> false ],
                  [ "answer"=> "Les Jeux Olympiques", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Qu'est-ce que Ytrack ?",
                "answers"=> [
                  [
                    "answer"=> "Un site de pour traquer les heures",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Un site pour répertorier ses tâches",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Un site de cyber",
                    "is_correct"=> false
                  ],
                  [
                    "answer"=> "Un site pour apprendre de nouveaux langages de programmation",
                    "is_correct"=> true
                  ]
                ]
              ],
              [
                "question"=> "Quel est le nom du célèbre tunnel romain reliant la Presqu'île à la Croix-Rousse ?",
                "answers"=> [
                  [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                  [ "answer"=> "Le Tunnel Traboule", "is_correct"=> true ],
                  [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Raymond Poincaré", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du fleuve qui traverse la ville de Lyon ?",
                "answers"=> [
                  [ "answer"=> "La Saône", "is_correct"=> true ],
                  [ "answer"=> "Le Rhône", "is_correct"=> false ],
                  [ "answer"=> "La Loire", "is_correct"=> false ],
                  [ "answer"=> "L'Isère", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "De quel département français la ville de Lyon est-elle la capitale ?",
                "answers"=> [
                  [ "answer"=> "L'Isère", "is_correct"=> false ],
                  [ "answer"=> "Le Rhône", "is_correct"=> true ],
                  [ "answer"=> "La Loire", "is_correct"=> false ],
                  [ "answer"=> "La Savoie", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la population approximative de la ville de Lyon ?",
                "answers"=> [
                  [ "answer"=> "400 000 habitants", "is_correct"=> false ],
                  [ "answer"=> "500 000 habitants", "is_correct"=> false ],
                  [ "answer"=> "600 000 habitants", "is_correct"=> true ],
                  [ "answer"=> "700 000 habitants", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Comment se nomme l'aéroport international de Lyon ?",
                "answers"=> [
                  [ "answer"=> "Aéroport Lyon-Saint-Exupéry", "is_correct"=> true ],
                  [ "answer"=> "Aéroport Marseille-Provence", "is_correct"=> false ],
                  [ "answer"=> "Aéroport Nice Côte d'Azur", "is_correct"=> false ],
                  [ "answer"=> "Aéroport de Genève", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quels sont les principaux moyens de transport en commun à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Métro, tramway, bus", "is_correct"=> true ],
                  [ "answer"=> "Train, RER, bus", "is_correct"=> false ],
                  [ "answer"=> "Métro, bus", "is_correct"=> false ],
                  [ "answer"=> "Tramway, bus", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la langue officielle parlée à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Français", "is_correct"=> true ],
                  [ "answer"=> "Anglais", "is_correct"=> false ],
                  [ "answer"=> "Espagnol", "is_correct"=> false ],
                  [ "answer"=> "Italien", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la devise utilisée en France ?",
                "answers"=> [
                  [ "answer"=> "Le Franc", "is_correct"=> false ],
                  [ "answer"=> "Le Mark", "is_correct"=> false ],
                  [ "answer"=> "L'Euro", "is_correct"=> true ],
                  [ "answer"=> "Le Franc suisse", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le climat à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Tropical", "is_correct"=> false ],
                  [ "answer"=> "Océanique tempéré", "is_correct"=> true ],
                  [ "answer"=> "Méditerranéen", "is_correct"=> false ],
                  [ "answer"=> "Continental", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quels sont les codes postaux de Lyon ?",
                "answers"=> [
                  [ "answer"=> "69001 à 69009", "is_correct"=> true ],
                  [ "answer"=> "38000", "is_correct"=> false ],
                  [ "answer"=> "13000", "is_correct"=> false ],
                  [ "answer"=> "75000", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du quartier d'affaires de Lyon ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> true ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "La Croix-Rousse", "is_correct"=> false ],
                  [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la spécialité culinaire salée la plus célèbre de Lyon ?",
                "answers"=> [
                  [ "answer"=> "La Salade Lyonnaise", "is_correct"=> false ],
                  [ "answer"=> "Le Gratin dauphinois", "is_correct"=> false ],
                  [ "answer"=> "Le Saucisson brioché", "is_correct"=> false ],
                  [ "answer"=> "Le Bœuf à la lyonnaise", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle est l'équipe de football professionnelle de Lyon ?",
                "answers"=> [
                  [ "answer"=> "L'Olympique Lyonnais", "is_correct"=> true ],
                  [ "answer"=> "L'Olympique de Marseille", "is_correct"=> false ],
                  [ "answer"=> "L'AS Saint-Étienne", "is_correct"=> false ],
                  [ "answer"=> "Le Paris Saint-Germain", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du célèbre chef cuisinier lyonnais triplement étoilé Michelin ?",
                "answers"=> [
                  [ "answer"=> "Paul Bocuse", "is_correct"=> true ],
                  [ "answer"=> "Alain Ducasse", "is_correct"=> false ],
                  [ "answer"=> "Pierre Gagnaire", "is_correct"=> false ],
                  [ "answer"=> "Michel Guérard", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la devise latine de la famille de Guise, liée à l'histoire de Lyon ?",
                "answers"=> [
                  [ "answer"=> "\"Ut fortiter sic fideliter\"", "is_correct"=> true ],
                  [ "answer"=> "\"Toujours fidèle\"", "is_correct"=> false ],
                  [ "answer"=> "\"Lyon, ville Lumière\"", "is_correct"=> false ],
                  [ "answer"=> "\"Qui s'y frotte s'y pique\"", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel nom est donné au funiculaire reliant la Croix-Rousse au bas de la colline ?",
                "answers"=> [
                  [ "answer"=> "Le Funiculaire de Fourvière", "is_correct"=> false ],
                  [ "answer"=> "Le Métro de Lyon", "is_correct"=> true ],
                  [ "answer"=> "Le Tramway de Croix-Rousse", "is_correct"=> false ],
                  [ "answer"=> "Le Bus de Fourvière", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la manifestation culturelle la plus importante de la ville de Lyon ?",
                "answers"=> [
                  [ "answer"=> "La Fête des Lumières", "is_correct"=> false ],
                  [ "answer"=> "La Biennale de Lyon", "is_correct"=> true ],
                  [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la ville jumelle de Lyon aux États-Unis ?",
                "answers"=> [
                  [ "answer"=> "New York", "is_correct"=> false ],
                  [ "answer"=> "San Francisco", "is_correct"=> false ],
                  [ "answer"=> "Washington D.C.", "is_correct"=> false ],
                  [ "answer"=> "Montréal", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Combien de temps dure les Ymmersions ?",
                "answers"=> [
                  [ "answer"=> "15 jours", "is_correct"=> true ],
                  [ "answer"=> "12 jours", "is_correct"=> false ],
                  [ "answer"=> "14 jours", "is_correct"=> false ],
                  [ "answer"=> "11 jours", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Par quelle entreprise a été crée Golang ?",
                "answers"=> [
                  [ "answer"=> "Microsoft", "is_correct"=> false ],
                  [ "answer"=> "Apple", "is_correct"=> false ],
                  [ "answer"=> "Google", "is_correct"=> true ],
                  [ "answer"=> "Facebook", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel musée d'art moderne et contemporain est situé sur les docks de la Saône ?",
                "answers"=> [
                  [ "answer"=> "Le Musée des Confluences", "is_correct"=> true ],
                  [ "answer"=> "Le Musée gallo-romain de Fourvière", "is_correct"=> false ],
                  [ "answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false ],
                  [ "answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle place arborée est un lieu de rencontre et de détente en plein cœur de la ville ?",
                "answers"=> [
                  [ "answer"=> "La Place Bellecour", "is_correct"=> false ],
                  [ "answer"=> "La Place des Terreaux", "is_correct"=> false ],
                  [ "answer"=> "La Place Carnot", "is_correct"=> true ],
                  [ "answer"=> "La Place Saint-Jean", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel quartier abrite de nombreux restaurants et bars branchés ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "Le Quartier des Cordeliers", "is_correct"=> false ],
                  [ "answer"=> "Le Quartier de la Guillotière", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel parc zoologique présente des animaux du monde entier ?",
                "answers"=> [
                  [ "answer"=> "Le Parc de la Tête d'Or", "is_correct"=> true ],
                  [ "answer"=> "Le Jardin des Plantes", "is_correct"=> false ],
                  [ "answer"=> "Le Parc de Miribel", "is_correct"=> false ],
                  [ "answer"=> "Le Parc Chambord", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel monument gothique est l'un des symboles de la ville de Lyon ?",
                "answers"=> [
                  [ "answer"=> "La Basilique Notre-Dame de Fourvière", "is_correct"=> false ],
                  [ "answer"=> "Le Gros Horloge", "is_correct"=> false ],
                  [ "answer"=> "La Cathédrale Saint-Jean-Baptiste", "is_correct"=> false ],
                  [ "answer"=> "L'Hôtel de Ville de Lyon", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle ancienne gare ferroviaire a été transformée en un centre commercial et de loisirs ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> true ],
                  [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ],
                  [ "answer"=> "La gare de Lyon Perrache", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel pont historique relie la Presqu'île à la ville de Vaulx-en-Velin ?",
                "answers"=> [
                  [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Saint-Vincent", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Éboulé", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle salle de concert accueille des concerts et des spectacles de renommée internationale ?",
                "answers"=> [
                  [ "answer"=> "La Cité Internationale", "is_correct"=> false ],
                  [ "answer"=> "Le Ninkasi", "is_correct"=> true ],
                  [ "answer"=> "Le Fuga", "is_correct"=> false ],
                  [ "answer"=> "Le Radiant", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel quartier multiculturel est connu pour ses restaurants et ses commerces du monde entier ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "La Croix-Rousse", "is_correct"=> false ],
                  [ "answer"=> "La Guillotière", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle ancienne abbaye royale est aujourd'hui un musée d'art et d'histoire ?",
                "answers"=> [
                  [ "answer"=> "L'Abbaye de Saint-Vincent-de-Paul", "is_correct"=> false ],
                  [ "answer"=> "L'Abbaye de Cluny", "is_correct"=> true ],
                  [ "answer"=> "L'Abbaye de Sénanque", "is_correct"=> false ],
                  [ "answer"=> "L'Abbaye de la Fontfroide", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle compagnie de danse contemporaine est basée à Lyon et dirigée par Carolyn Carlson ?",
                "answers"=> [
                  [ "answer"=> "Le Ballet de l'Opéra National de Lyon", "is_correct"=> true ],
                  [ "answer"=> "Le Ballet Preljocaj", "is_correct"=> false ],
                  [ "answer"=> "Le Ballet Rambert", "is_correct"=> false ],
                  [ "answer"=> "Le Ballet Nureyev", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel festival de musiques actuelles se déroule chaque année à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> true ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                  [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel festival d'art urbain investit les rues de la ville avec des fresques et des installations ?",
                "answers"=> [
                  [ "answer"=> "La Biennale de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                  [ "answer"=> "Le Mur", "is_correct"=> true ],
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel festival de photographie met à l'honneur les images du monde entier ?",
                "answers"=> [
                  [ "answer"=> "Visa pour l'image", "is_correct"=> true ],
                  [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle salle de spectacle accueille des opéras, des ballets et des concerts classiques ?",
                "answers"=> [
                  [ "answer"=> "Le Ninkasi", "is_correct"=> false ],
                  [ "answer"=> "Le Fuga", "is_correct"=> false ],
                  [ "answer"=> "Le Radiant", "is_correct"=> false ],
                  [ "answer"=> "L'Opéra National de Lyon", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel est le nom du stade de rugby de Lyon ?",
                "answers"=> [
                  [ "answer"=> "Le Matmut Atlantique", "is_correct"=> false ],
                  [ "answer"=> "Le Stadium", "is_correct"=> false ],
                  [ "answer"=> "Le Stade de Gerland", "is_correct"=> true ],
                  [ "answer"=> "Le Parc Olympique Lyonnais", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Combien il y a eu d'évaluation, raids compris pendant les Ymmersions ?",
                "answers"=> [
                  [ "answer"=> "4", "is_correct"=> false ],
                  [ "answer"=> "7", "is_correct"=> false ],
                  [ "answer"=> "5", "is_correct"=> false ],
                  [ "answer"=> "6", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel est le nom du personnage historique célèbre ayant vécu à Lyon et connu pour ses romans policiers ?",
                "answers"=> [
                  [ "answer"=> "Alexandre Dumas", "is_correct"=> false ],
                  [ "answer"=> "12 jours", "is_correct"=> false ],
                  [ "answer"=> "Joseph Kessel", "is_correct"=> true ],
                  [ "answer"=> "Emile Zola", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la particularité géographique de la ville de Lyon ?",
                "answers"=> [
                  [ "answer"=> "Située au bord de la mer", "is_correct"=> false ],
                  [ "answer"=> "Entourée de montagnes", "is_correct"=> false ],
                  [ "answer"=> "Traversée par deux fleuves", "is_correct"=> true ],
                  [ "answer"=> "Capitale d'une région insulaire", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du département voisin du Rhône ?",
                "answers"=> [
                  [ "answer"=> "L'Isère", "is_correct"=> false ],
                  [ "answer"=> "La Loire", "is_correct"=> false ],
                  [ "answer"=> "La Savoie", "is_correct"=> false ],
                  [ "answer"=> "L'Ain", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle est la devise officielle de la région Auvergne-Rhône-Alpes ?",
                "answers"=> [
                  [ "answer"=> "\"Ut fortiter sic fideliter\"", "is_correct"=> false ],
                  [ "answer"=> "\"Toujours fidèle\"", "is_correct"=> false ],
                  [ "answer"=> "\"Lyon, ville Lumière\"", "is_correct"=> false ],
                  [ "answer"=> "\"Foi, travail, liberté\"", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle est la spécialité fromagère AOP originaire de la région lyonnaise ?",
                "answers"=> [
                  [ "answer"=> "Le Bleu d'Auvergne", "is_correct"=> false ],
                  [ "answer"=> "Le Comté", "is_correct"=> false ],
                  [ "answer"=> "Le Saint-Marcellin", "is_correct"=> false ],
                  [ "answer"=> "Le Mont d'or", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel est le nom du plat typique du Beaujolais, région viticole proche de Lyon ?",
                "answers"=> [
                  [ "answer"=> "La Salade Lyonnaise", "is_correct"=> false ],
                  [ "answer"=> "Le Gratin dauphinois", "is_correct"=> false ],
                  [ "answer"=> "Le Saucisson brioché", "is_correct"=> false ],
                  [ "answer"=> "La Poularde au vin rouge", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle est la manifestation sportive annuelle qui attire des coureurs du monde entier ?",
                "answers"=> [
                  [ "answer"=> "Le Marathon de Paris", "is_correct"=> false ],
                  [ "answer"=> "Le Tour de France", "is_correct"=> true ],
                  [ "answer"=> "La Coupe du Monde de football", "is_correct"=> false ],
                  [ "answer"=> "Les Jeux Olympiques", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du célèbre pont romain reliant la Presqu'île à la Croix-Rousse ?",
                "answers"=> [
                  [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Saint-Vincent", "is_correct"=> false ],
                  [ "answer"=> "Le Pont du Change", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle est la spécialité culinaire sucrée lyonnaise à base de pâte sablé et de pralines ?",
                "answers"=> [
                  [ "answer"=> "La Praline", "is_correct"=> false ],
                  [ "answer"=> "La Brioche aux pralines", "is_correct"=> false ],
                  [ "answer"=> "La Tarte aux pralines", "is_correct"=> true ],
                  [ "answer"=> "Le Gâteau Praliné", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du quartier étudiant connu pour ses nombreuses bibliothèques et ses espaces verts ?",
                "answers"=> [
                  [ "answer"=> "La Confluence", "is_correct"=> false ],
                  [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                  [ "answer"=> "Le Quartier des Cordeliers", "is_correct"=> false ],
                  [ "answer"=> "Le Quartier de Villeurbanne", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel est le nom du personnage historique célèbre ayant fondé l'imprimerie à Lyon ?",
                "answers"=> [
                  [ "answer"=> "Gutenberg", "is_correct"=> true ],
                  [ "answer"=> "Gutemberg", "is_correct"=> false ],
                  [ "answer"=> "Geoffroy Tory", "is_correct"=> false ],
                  [ "answer"=> "Robert Estienne", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Par quelle entreprise a été crée Golang ?",
                "answers"=> [
                  [ "answer"=> "Microsoft", "is_correct"=> false ],
                  [ "answer"=> "Apple", "is_correct"=> false ],
                  [ "answer"=> "Google", "is_correct"=> true ],
                  [ "answer"=> "Facebook", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du département français dont Lyon est la préfecture ?",
                "answers"=> [
                  [ "answer"=> "L'Isère", "is_correct"=> false ],
                  [ "answer"=> "Le Rhône", "is_correct"=> true ],
                  [ "answer"=> "La Loire", "is_correct"=> false ],
                  [ "answer"=> "La Savoie", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la devise de l'Olympique Lyonnais ?",
                "answers"=> [
                  [ "answer"=> "Ut fortiter sic fideliter", "is_correct"=> false ],
                  [ "answer"=> "Toujours fidèle", "is_correct"=> false ],
                  [ "answer"=> "Lyon, ville Lumière", "is_correct"=> false ],
                  [ "answer"=> "Nous ne lâchons jamais rien", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quelle est la spécialité fromagère produite dans le massif du Pilat, proche de Lyon ?",
                "answers"=> [
                  [ "answer"=> "Le Bleu d'Auvergne", "is_correct"=> false ],
                  [ "answer"=> "Le Comté", "is_correct"=> false ],
                  [ "answer"=> "Le Saint-Marcellin", "is_correct"=> false ],
                  [ "answer"=> "La Fourme de Montbrison", "is_correct"=> true ]
                ]
              ],
              [
                "question"=> "Quel est le nom du vin blanc liquoreux produit dans la région lyonnaise ?",
                "answers"=> [
                  [ "answer"=> "Le Beaujolais", "is_correct"=> false ],
                  [ "answer"=> "Le Condrieu", "is_correct"=> true ],
                  [ "answer"=> "Le Côte du Rhône", "is_correct"=> false ],
                  [ "answer"=> "Le Hermitage", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la manifestation culturelle gratuite qui a lieu chaque année à Lyon en décembre ?",
                "answers"=> [
                  [ "answer"=> "La Fête des Lumières", "is_correct"=> true ],
                  [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                  [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                  [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quel est le nom du tunnel romain reliant la Presqu'île à la Croix-Rousse ?",
                "answers"=> [
                  [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                  [ "answer"=> "Le Tunnel Traboule", "is_correct"=> true ],
                  [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                  [ "answer"=> "Le Pont Raymond Poincaré", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Combien de temps dure les Ymmersions et connu pour ses romans d'aventures ?",
                "answers"=> [
                  [ "answer"=> "Alexandre Dumas", "is_correct"=> false ],
                  [ "answer"=> "12 jours", "is_correct"=> false ],
                  [ "answer"=> "Jules Verne", "is_correct"=> true ],
                  [ "answer"=> "Emile Zola", "is_correct"=> false ]
                ]
              ],
              [
                "question"=> "Quelle est la spécialité culinaire salée lyonnaise à base de quenelles et de sauce béchamel ?",
                "answers"=> [
                  [ "answer"=> "La Salade Lyonnaise", "is_correct"=> false ],
                  [ "answer"=> "Le Gratin dauphinois", "is_correct"=> false ],
                  [ "answer"=> "Le Saucisson brioché", "is_correct"=> false ],
                  [ "answer"=> "Le Gratin de quenelles", "is_correct"=> true ]
                ]
            //   NEW

                ],
                [
                    "question"=> "Parmi ces mots de passe, lequel est le plus sécurisé ?",
                    "answers"=> [
                      [ "answer"=> "azerty", "is_correct"=> false ],
                      [ "answer"=> "123456", "is_correct"=> false ],
                      [ "answer"=> "MonMotDePasse", "is_correct"=> false ],
                      [ "answer"=> "P@ssw0rdS3curisé!", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Que devez-vous faire si vous recevez un e-mail suspect ?",
                    "answers"=> [
                      [ "answer"=> "Ouvrir l'e-mail et cliquer sur les liens qu'il contient.", "is_correct"=> false ],
                      [ "answer"=> "Répondre à l'e-mail et demander plus d'informations.", "is_correct"=> false ],
                      [ "answer"=> "Supprimer l'e-mail immédiatement et signaler-le comme spam.", "is_correct"=> true ],
                      [ "answer"=> "Transférer l'e-mail à tous vos contacts.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvez-vous protéger votre ordinateur contre les virus ?",
                    "answers"=> [
                      [ "answer"=> "Désactiver votre pare-feu.", "is_correct"=> false ],
                      [ "answer"=> "Télécharger des logiciels provenant de sources non fiables.", "is_correct"=> false ],
                      [ "answer"=> "Installer un antivirus et le maintenir à jour.", "is_correct"=> true ],
                      [ "answer"=> "Cliquer sur tous les liens que vous voyez dans vos emails.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Qu'est-ce que le phishing ?",
                    "answers"=> [
                      [ "answer"=> "Une technique utilisée par les pirates informatiques pour voler vos informations personnelles.", "is_correct"=> true ],
                      [ "answer"=> "Un type de poisson pêché en eau profonde.", "is_correct"=> false ],
                      [ "answer"=> "Un nouveau type de réseau social.", "is_correct"=> false ],
                      [ "answer"=> "Un langage de programmation informatique.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvez-vous créer un mot de passe fort ?",
                    "answers"=> [
                      [ "answer"=> "Utiliser un mot de passe court et facile à retenir.", "is_correct"=> false ],
                      [ "answer"=> "Utiliser le même mot de passe pour tous vos comptes.", "is_correct"=> false ],
                      [ "answer"=> "Inclure votre nom et votre date de naissance dans votre mot de passe.", "is_correct"=> false ],
                      [ "answer"=> "Utiliser un mot de passe long et complexe avec des majuscules, des minuscules, des chiffres et des symboles.", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Que faire si vous pensez avoir été victime d'une cyberattaque ?",
                    "answers"=> [
                      [ "answer"=> "Ne rien faire et attendre que le problème se résolve.", "is_correct"=> false ],
                      [ "answer"=> "Partager l'information avec tous vos amis sur les réseaux sociaux.", "is_correct"=> false ],
                      [ "answer"=> "Changer vos mots de passe et contacter votre banque ou toute autre institution concernée.", "is_correct"=> true ],
                      [ "answer"=> "Ignorer le problème et continuer comme si de rien n'était.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Qu'est-ce qu'une empreinte numérique ?",
                    "answers"=> [
                      [ "answer"=> "La trace que vous laissez sur internet en naviguant et en utilisant des services en ligne.", "is_correct"=> true ],
                      [ "answer"=> "Un type de scanner biométrique utilisé pour identifier les personnes.", "is_correct"=> false ],
                      [ "answer"=> "Un appareil électronique portable utilisé pour stocker des données.", "is_correct"=> false ],
                      [ "answer"=> "Un programme informatique utilisé pour pirater des ordinateurs.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvez-vous protéger votre vie privée en ligne ?",
                    "answers"=> [
                      [ "answer"=> "Partager toutes vos informations personnelles sur les réseaux sociaux.", "is_correct"=> false ],
                      [ "answer"=> "Accepter toutes les demandes d'amis que vous recevez en ligne.", "is_correct"=> false ],
                      [ "answer"=> "Faire attention aux sites Web que vous visitez et aux informations que vous partagez.", "is_correct"=> true ],
                      [ "answer"=> "Cliquer sur toutes les publicités que vous voyez en ligne.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Qu'est-ce qu'un pare-feu ?",
                    "answers"=> [
                      [ "answer"=> "Un mur physique qui protège votre maison.", "is_correct"=> false ],
                      [ "answer"=> "Un programme informatique qui protège votre ordinateur contre les intrusions.", "is_correct"=> true ],
                      [ "answer"=> "Un type de logiciel antivirus.", "is_correct"=> false ],
                      [ "answer"=> "Un appareil électronique utilisé pour stocker des données.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Pourquoi est-il important de mettre à jour vos logiciels ?",
                    "answers"=> [
                      [ "answer"=> "Pour que vos logiciels soient plus performants.", "is_correct"=> false ],
                      [ "answer"=> "Pour débloquer de nouvelles fonctionnalités.", "is_correct"=> false ],
                      [ "answer"=> "Pour corriger les failles de sécurité et protéger votre ordinateur contre les cyberattaques.", "is_correct"=> true ],
                      [ "answer"=> "Pour impressionner vos amis.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Parmi ces affirmations, laquelle est la plus fausse ?",
                    "answers"=> [
                      [ "answer"=> "Il est important d'utiliser un mot de passe différent pour chaque compte que vous possédez.", "is_correct"=> true ],
                      [ "answer"=> "Vous n'avez pas besoin d'installer un antivirus sur votre ordinateur si vous êtes prudent.", "is_correct"=> false ],
                      [ "answer"=> "Il est normal de recevoir des emails vous demandant vos informations personnelles.", "is_correct"=> false ],
                      [ "answer"=> "Il est important de se méfier des liens que vous cliquez sur internet.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Qu'est-ce qu'un VPN ?",
                    "answers"=> [
                      [ "answer"=> "Un type de connexion internet plus rapide.", "is_correct"=> false ],
                      [ "answer"=> "Un réseau privé virtuel qui vous permet de naviguer sur internet de manière anonyme.", "is_correct"=> true ],
                      [ "answer"=> "Un logiciel antivirus.", "is_correct"=> false ],
                      [ "answer"=> "Un type de cloud computing.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvez-vous protéger vos données personnelles ?",
                    "answers"=> [
                      [ "answer"=> "Partager vos informations personnelles avec tous ceux qui vous le demandent.", "is_correct"=> false ],
                      [ "answer"=> "Stocker vos données sur des clés USB non protégées.", "is_correct"=> false ],
                      [ "answer"=> "Utiliser un mot de passe faible pour protéger vos fichiers importants.", "is_correct"=> false ],
                      [ "answer"=> "Utiliser un mot de passe fort et stocker vos données sur un disque dur externe chiffré.", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Qu'est-ce que le hameçonnage (ou phishing) par SMS ?",
                    "answers"=> [
                      [ "answer"=> "Une technique utilisée par les pirates informatiques pour voler vos informations personnelles par SMS.", "is_correct"=> true ],
                      [ "answer"=> "Un type de pêche sportive.", "is_correct"=> false ],
                      [ "answer"=> "Un nouveau type de réseau social.", "is_correct"=> false ],
                      [ "answer"=> "Un langage de programmation informatique.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Que faire si vous recevez un SMS suspect ?",
                    "answers"=> [
                      [ "answer"=> "Répondre au SMS et fournir les informations demandées.", "is_correct"=> false ],
                      [ "answer"=> "Cliquer sur les liens présents dans le SMS.", "is_correct"=> false ],
                      [ "answer"=> "Supprimer le SMS immédiatement et signaler le numéro comme spam.", "is_correct"=> true ],
                      [ "answer"=> "Transférer le SMS à tous vos contacts.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvez-vous sécuriser vos comptes sur les réseaux sociaux ?",
                    "answers"=> [
                      [ "answer"=> "Accepter toutes les demandes d'amis que vous recevez.", "is_correct"=> false ],
                      [ "answer"=> "Partager vos informations personnelles avec tous vos amis.", "is_correct"=> false ],
                      [ "answer"=> "Utiliser un mot de passe faible pour tous vos comptes.", "is_correct"=> false ],
                      [ "answer"=> "Activer l'authentification à deux facteurs et utiliser des mots de passe forts.", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Qu'est-ce qu'une cyberattaque ?",
                    "answers"=> [
                      [ "answer"=> "Une coupure de courant qui affecte votre ordinateur.", "is_correct"=> false ],
                      [ "answer"=> "Une tentative illégale d'accéder à vos informations ou à votre système informatique.", "is_correct"=> true ],
                      [ "answer"=> "Un problème technique avec votre fournisseur d'accès à internet.", "is_correct"=> false ],
                      [ "answer"=> "Une mise à jour logicielle obligatoire.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvez-vous vous protéger contre les malwares ?",
                    "answers"=> [
                      [ "answer"=> "Télécharger des logiciels provenant de sources non fiables.", "is_correct"=> false ],
                      [ "answer"=> "Cliquer sur tous les liens que vous voyez dans vos emails.", "is_correct"=> false ],
                      [ "answer"=> "Installer un antivirus et le maintenir à jour.", "is_correct"=> true ],
                      [ "answer"=> "Ignorer les avertissements de sécurité de votre navigateur.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Que faire si vous pensez avoir cliqué sur un lien malveillant ?",
                    "answers"=> [
                      [ "answer"=> "Ne rien faire et espérer que le problème se résolve.", "is_correct"=> false ],
                      [ "answer"=> "Partager le lien avec tous vos amis pour les avertir.", "is_correct"=> false ],
                      [ "answer"=> "Débrancher votre ordinateur d'internet.", "is_correct"=> false ],
                      [ "answer"=> "Analyser votre ordinateur avec un antivirus et changer vos mots de passe.", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Qu'est-ce que le cyberharcèlement ?",
                    "answers"=> [
                      [ "answer"=> "Un type de harcèlement physique.", "is_correct"=> false ],
                      [ "answer"=> "Le harcèlement d'une personne par le biais de messages électroniques ou d'autres moyens de communication numériques.", "is_correct"=> true ],
                      [ "answer"=> "Un problème technique avec votre téléphone portable.", "is_correct"=> false ],
                      [ "answer"=> "Un nouveau type de jeu vidéo.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Que faire si vous êtes victime de cyberharcèlement ?",
                    "answers"=> [
                      [ "answer"=> "Ne rien faire et ignorer les messages.", "is_correct"=> false ],
                      [ "answer"=> "Répondre aux messages et essayer de raisonner avec le harceleur.", "is_correct"=> false ],
                      [ "answer"=> "Signaler le harcèlement aux autorités et conserver des preuves des messages reçus.", "is_correct"=> true ],
                      [ "answer"=> "Supprimer votre compte sur les réseaux sociaux.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvez-vous créer un cyberespace plus sûr pour tous ?",
                    "answers"=> [
                      [ "answer"=> "Partager vos informations personnelles en ligne.", "is_correct"=> false ],
                      [ "answer"=> "Cliquer sur tous les liens que vous voyez, même ceux qui proviennent d'inconnus.", "is_correct"=> false ],
                      [ "answer"=> "Respecter les autres utilisateurs en ligne et éviter de diffuser du contenu haineux ou offensant.", "is_correct"=> true ],
                      [ "answer"=> "Ignorer les règles de sécurité en ligne.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvez-vous protéger vos données bancaires ?",
                    "answers"=> [
                      [ "answer"=> "Donner vos informations bancaires à tous ceux qui vous les demandent.", "is_correct"=> false ],
                      [ "answer"=> "Effectuer des transactions bancaires sur des sites Web non sécurisés.", "is_correct"=> false ],
                      [ "answer"=> "Utiliser le même mot de passe pour votre compte bancaire et vos autres comptes en ligne.", "is_correct"=> false ],
                      [ "answer"=> "Ne jamais partager vos informations bancaires par email ou SMS et utiliser un site Web sécurisé pour vos transactions bancaires.", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Qu'est-ce qu'une mise à jour de sécurité ?",
                    "answers"=> [
                      [ "answer"=> "Une publicité pour un nouveau produit informatique.", "is_correct"=> false ],
                      [ "answer"=> "Une modification logicielle visant à corriger des failles de sécurité et protéger votre ordinateur contre les cyberattaques.", "is_correct"=> true ],
                      [ "answer"=> "Un problème technique avec votre fournisseur d'accès à internet.", "is_correct"=> false ],
                      [ "answer"=> "Un nouveau type de jeu vidéo.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Pourquoi est-il important de sauvegarder vos données régulièrement ?",
                    "answers"=> [
                      [ "answer"=> "Pour libérer de l'espace sur votre disque dur.", "is_correct"=> false ],
                      [ "answer"=> "Pour impressionner vos amis avec vos compétences informatiques.", "is_correct"=> false ],
                      [ "answer"=> "Pour vous assurer que vous ne perdrez jamais vos données en cas de problème matériel ou de cyberattaque.", "is_correct"=> true ],
                      [ "answer"=> "Pour tester votre nouveau disque dur externe.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvez-vous choisir un mot de passe fort ?",
                    "answers"=> [
                      [ "answer"=> "Utiliser un mot de passe court et facile à retenir.", "is_correct"=> false ],
                      [ "answer"=> "Utiliser le même mot de passe pour tous vos comptes.", "is_correct"=> false ],
                      [ "answer"=> "Inclure votre nom et votre date de naissance dans votre mot de passe.", "is_correct"=> false ],
                      [ "answer"=> "Utiliser un mot de passe long et complexe avec des majuscules, des minuscules, des chiffres et des symboles, et éviter les informations personnelles facilement devinables.", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Que faire si vous pensez avoir perdu votre mot de passe ?",
                    "answers"=> [
                      [ "answer"=> "Essayer de deviner votre mot de passe en utilisant des dates importantes ou des mots courants.", "is_correct"=> false ],
                      [ "answer"=> "Demander à un ami de vous prêter son mot de passe.", "is_correct"=> false ],
                      [ "answer"=> "Utiliser la fonction \"Mot de passe oublié\" pour réinitialiser votre mot de passe en utilisant une adresse email ou un numéro de téléphone de secours.", "is_correct"=> true ],
                      [ "answer"=> "Ignorer le problème et créer un nouveau compte.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvez-vous rester informé sur les dernières menaces et bonnes pratiques en matière de cybersécurité ?",
                    "answers"=> [
                      [ "answer"=> "Ne pas prêter attention aux actualités et aux informations en ligne.", "is_correct"=> false ],
                      [ "answer"=> "Faire confiance à tous les emails et sites Web que vous rencontrez.", "is_correct"=> false ],
                      [ "answer"=> "Suivre des sources fiables d'information sur la cybersécurité et mettre à jour régulièrement vos connaissances.", "is_correct"=> true ],
                      [ "answer"=> "Ignorer les conseils de sécurité des experts en cybersécurité.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Qu'est-ce que l'intelligence artificielle (IA) ?",
                    "answers"=> [
                      [ "answer"=> "La capacité d'un ordinateur à penser et à agir comme un humain.", "is_correct"=> true ],
                      [ "answer"=> "Un type de robot humanoïde.", "is_correct"=> false ],
                      [ "answer"=> "Un nouveau langage de programmation informatique.", "is_correct"=> false ],
                      [ "answer"=> "Une théorie scientifique sur l'origine de l'univers.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les exemples courants d'applications de l'IA ?",
                    "answers"=> [
                      [ "answer"=> "Les assistants vocaux comme Siri et Alexa.", "is_correct"=> true ],
                      [ "answer"=> "Les filtres anti-spam dans les emails.", "is_correct"=> false ],
                      [ "answer"=> "Les voitures autonomes.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la différence entre l'apprentissage automatique et l'intelligence artificielle ?",
                    "answers"=> [
                      [ "answer"=> "L'apprentissage automatique est un sous-ensemble de l'IA qui permet aux ordinateurs d'apprendre sans être explicitement programmés.", "is_correct"=> true ],
                      [ "answer"=> "L'IA est un terme plus large qui englobe tous les types d'intelligence, y compris la biologie et la psychologie.", "is_correct"=> false ],
                      [ "answer"=> "Il n'y a aucune différence entre les deux termes.", "is_correct"=> false ],
                      [ "answer"=> "L'apprentissage automatique est plus complexe et sophistiqué que l'IA.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les différents types d'apprentissage automatique ?",
                    "answers"=> [
                      [ "answer"=> "Apprentissage supervisé, apprentissage non supervisé et apprentissage par renforcement.", "is_correct"=> true ],
                      [ "answer"=> "Apprentissage par la lecture, apprentissage par l'observation et apprentissage par l'expérience.", "is_correct"=> false ],
                      [ "answer"=> "Codage, décodage et traitement du langage naturel.", "is_correct"=> false ],
                      [ "answer"=> "Apprentissage formel et apprentissage informel.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment l'IA peut-elle être utilisée pour résoudre des problèmes dans le monde réel ?",
                    "answers"=> [
                      [ "answer"=> "Diagnostiquer des maladies et proposer des traitements.", "is_correct"=> true ],
                      [ "answer"=> "Développer de nouveaux matériaux et optimiser la production industrielle.", "is_correct"=> false ],
                      [ "answer"=> "Lutter contre le changement climatique et protéger l'environnement.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les défis éthiques soulevés par l'IA ?",
                    "answers"=> [
                      [ "answer"=> "Le biais algorithmique et la discrimination.", "is_correct"=> true ],
                      [ "answer"=> "La perte d'emplois et l'impact sur le marché du travail.", "is_correct"=> false ],
                      [ "answer"=> "La question de la conscience des machines et des droits des robots.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvons-nous nous assurer que l'IA est développée et utilisée de manière responsable ?",
                    "answers"=> [
                      [ "answer"=> "Mettre en place des réglementations et des lignes directrices éthiques claires.", "is_correct"=> true ],
                      [ "answer"=> "Éduquer le public sur l'IA et ses implications.", "is_correct"=> false ],
                      [ "answer"=> "Encourager la collaboration entre les chercheurs, les développeurs et les citoyens.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel est l'avenir de l'IA ?",
                    "answers"=> [
                      [ "answer"=> "L'IA est en train de révolutionner de nombreux aspects de notre vie et son impact ne fera que croître.", "is_correct"=> true ],
                      [ "answer"=> "L'IA finira par surpasser l'intelligence humaine et représentera une menace pour l'humanité.", "is_correct"=> false ],
                      [ "answer"=> "L'IA n'est qu'une mode passagère et son impact sera limité.", "is_correct"=> false ],
                      [ "answer"=> "Il est impossible de prédire l'avenir de l'IA avec certitude.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvez-vous en savoir plus sur l'IA ?",
                    "answers"=> [
                      [ "answer"=> "Suivre des cours en ligne et lire des articles sur le sujet.", "is_correct"=> true ],
                      [ "answer"=> "Regarder des films et des documentaires sur l'IA.", "is_correct"=> false ],
                      [ "answer"=> "Jouer à des jeux vidéo basés sur l'IA.", "is_correct"=> false ],
                      [ "answer"=> "Assister à des conférences et des événements dédiés à l'IA.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment l'IA peut-elle changer votre vie professionnelle et personnelle ?",
                    "answers"=> [
                      [ "answer"=> "L'IA peut automatiser des tâches, améliorer la prise de décision et offrir de nouvelles opportunités.", "is_correct"=> true ],
                      [ "answer"=> "L'IA peut remplacer les emplois humains et menacer notre vie privée.", "is_correct"=> false ],
                      [ "answer"=> "L'IA n'aura aucun impact sur notre vie quotidienne.", "is_correct"=> false ],
                      [ "answer"=> "Il est encore trop tôt pour dire comment l'IA affectera notre avenir.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment fonctionne le traitement du langage naturel (NLP) ?",
                    "answers"=> [
                      [ "answer"=> "Le NLP permet aux ordinateurs de comprendre et de générer un langage humain.", "is_correct"=> true ],
                      [ "answer"=> "C'est une technique de traduction automatique.", "is_correct"=> false ],
                      [ "answer"=> "C'est un type d'intelligence artificielle qui permet aux robots de se déplacer et d'interagir avec leur environnement.", "is_correct"=> false ],
                      [ "answer"=> "C'est une méthode de compression de données.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les applications du NLP dans la vie quotidienne ?",
                    "answers"=> [
                      [ "answer"=> "Les assistants vocaux comme Siri et Alexa.", "is_correct"=> true ],
                      [ "answer"=> "La traduction automatique de sites Web et de documents.", "is_correct"=> false ],
                      [ "answer"=> "La correction automatique et la suggestion de mots dans les outils d'écriture.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Qu'est-ce que l'apprentissage par renforcement ?",
                    "answers"=> [
                      [ "answer"=> "Une méthode d'apprentissage automatique où un agent apprend par essais et erreurs dans un environnement donné.", "is_correct"=> true ],
                      [ "answer"=> "Une technique de supervision humaine pour guider l'apprentissage d'un système d'IA.", "is_correct"=> false ],
                      [ "answer"=> "Un type d'intelligence artificielle basée sur des règles et des logiques prédéfinies.", "is_correct"=> false ],
                      [ "answer"=> "Un algorithme de recherche optimisé pour trouver des solutions dans des espaces de recherche complexes.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les exemples d'applications de l'apprentissage par renforcement ?",
                    "answers"=> [
                      [ "answer"=> "Les robots qui apprennent à jouer à des jeux vidéo ou à effectuer des tâches complexes.", "is_correct"=> true ],
                      [ "answer"=> "Les systèmes de recommandation de produits et de services personnalisés.", "is_correct"=> false ],
                      [ "answer"=> "Les assistants virtuels qui apprennent à s'adapter aux préférences de leurs utilisateurs.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la différence entre l'intelligence artificielle générale (AGI) et l'intelligence artificielle étroite (ANI) ?",
                    "answers"=> [
                      [ "answer"=> "L'AGI est un type d'IA hypothétique capable de comprendre et de raisonner comme un humain, tandis que l'ANI est limitée à des tâches spécifiques.", "is_correct"=> true ],
                      [ "answer"=> "L'AGI est déjà atteinte dans certains domaines, tandis que l'ANI est encore en développement.", "is_correct"=> false ],
                      [ "answer"=> "Il n'y a pas de différence significative entre les deux termes.", "is_correct"=> false ],
                      [ "answer"=> "L'AGI est un objectif irréaliste et impossible à atteindre.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les défis techniques à relever pour développer une AGI ?",
                    "answers"=> [
                      [ "answer"=> "Comprendre la conscience et la subjectivité humaines.", "is_correct"=> true ],
                      [ "answer"=> "Développer des algorithmes d'apprentissage plus puissants et efficaces.", "is_correct"=> false ],
                      [ "answer"=> "Créer des systèmes d'IA capables de raisonner et de prendre des décisions dans des environnements complexes et incertains.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les impacts potentiels de l'AGI sur la société ?",
                    "answers"=> [
                      [ "answer"=> "Une transformation radicale de nombreux aspects de notre vie, de l'économie à la politique.", "is_correct"=> true ],
                      [ "answer"=> "Des risques potentiels liés à la perte de contrôle et aux inégalités accrues.", "is_correct"=> false ],
                      [ "answer"=> "La fin du travail humain et la domination des machines.", "is_correct"=> false ],
                      [ "answer"=> "Il est encore trop tôt pour évaluer les impacts de l'AGI.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvons-nous nous préparer à l'avènement de l'AGI ?",
                    "answers"=> [
                      [ "answer"=> "Encourager la recherche et le développement responsables de l'IA.", "is_correct"=> true ],
                      [ "answer"=> "Éduquer le public aux enjeux de l'IA et favoriser un dialogue ouvert.", "is_correct"=> false ],
                      [ "answer"=> "Mettre en place des cadres éthiques et juridiques clairs pour encadrer le développement et l'utilisation de l'IA.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment l'IA peut-elle contribuer à résoudre les grands défis du monde, tels que le changement climatique et la pauvreté ?",
                    "answers"=> [
                      [ "answer"=> "L'IA peut aider à optimiser la production d'énergie, à développer des solutions de transport durables et à lutter contre la déforestation.", "is_correct"=> true ],
                      [ "answer"=> "L'IA peut aider à identifier les populations les plus vulnérables et à cibler les interventions sociales de manière plus efficace.", "is_correct"=> false ],
                      [ "answer"=> "L'IA peut contribuer à la recherche scientifique et au développement de nouvelles technologies pour relever ces défis.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment l'IA peut-elle être utilisée pour résoudre des problèmes dans le monde réel ?",
                    "answers"=> [
                      [ "answer"=> "Diagnostiquer des maladies et proposer des traitements.", "is_correct"=> true ],
                      [ "answer"=> "Développer de nouveaux matériaux et optimiser la production industrielle.", "is_correct"=> false ],
                      [ "answer"=> "Lutter contre le changement climatique et protéger l'environnement.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les défis éthiques soulevés par l'IA ?",
                    "answers"=> [
                      [ "answer"=> "Le biais algorithmique et la discrimination.", "is_correct"=> true ],
                      [ "answer"=> "La perte d'emplois et l'impact sur le marché du travail.", "is_correct"=> false ],
                      [ "answer"=> "La question de la conscience des machines et des droits des robots.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvons-nous nous assurer que l'IA est développée et utilisée de manière responsable ?",
                    "answers"=> [
                      [ "answer"=> "Mettre en place des réglementations et des lignes directrices éthiques claires.", "is_correct"=> true ],
                      [ "answer"=> "Éduquer le public sur l'IA et ses implications.", "is_correct"=> false ],
                      [ "answer"=> "Encourager la collaboration entre les chercheurs, les développeurs et les citoyens.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel est l'avenir de l'IA ?",
                    "answers"=> [
                      [ "answer"=> "L'IA est en train de révolutionner de nombreux aspects de notre vie et son impact ne fera que croître.", "is_correct"=> true ],
                      [ "answer"=> "L'IA finira par surpasser l'intelligence humaine et représentera une menace pour l'humanité.", "is_correct"=> false ],
                      [ "answer"=> "L'IA n'est qu'une mode passagère et son impact sera limité.", "is_correct"=> false ],
                      [ "answer"=> "Il est impossible de prédire l'avenir de l'IA avec certitude.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvez-vous en savoir plus sur l'IA ?",
                    "answers"=> [
                      [ "answer"=> "Suivre des cours en ligne et lire des articles sur le sujet.", "is_correct"=> true ],
                      [ "answer"=> "Regarder des films et des documentaires sur l'IA.", "is_correct"=> false ],
                      [ "answer"=> "Jouer à des jeux vidéo basés sur l'IA.", "is_correct"=> false ],
                      [ "answer"=> "Assister à des conférences et des événements dédiés à l'IA.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment l'IA peut-elle changer votre vie professionnelle et personnelle ?",
                    "answers"=> [
                      [ "answer"=> "L'IA peut automatiser des tâches, améliorer la prise de décision et offrir de nouvelles opportunités.", "is_correct"=> true ],
                      [ "answer"=> "L'IA peut remplacer les emplois humains et menacer notre vie privée.", "is_correct"=> false ],
                      [ "answer"=> "L'IA n'aura aucun impact sur notre vie quotidienne.", "is_correct"=> false ],
                      [ "answer"=> "Il est encore trop tôt pour dire comment l'IA affectera notre avenir.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment fonctionne le traitement du langage naturel (NLP) ?",
                    "answers"=> [
                      [ "answer"=> "Le NLP permet aux ordinateurs de comprendre et de générer un langage humain.", "is_correct"=> true ],
                      [ "answer"=> "C'est une technique de traduction automatique.", "is_correct"=> false ],
                      [ "answer"=> "C'est un type d'intelligence artificielle qui permet aux robots de se déplacer et d'interagir avec leur environnement.", "is_correct"=> false ],
                      [ "answer"=> "C'est une méthode de compression de données.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les applications du NLP dans la vie quotidienne ?",
                    "answers"=> [
                      [ "answer"=> "Les assistants vocaux comme Siri et Alexa.", "is_correct"=> true ],
                      [ "answer"=> "La traduction automatique de sites Web et de documents.", "is_correct"=> false ],
                      [ "answer"=> "La correction automatique et la suggestion de mots dans les outils d'écriture.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Qu'est-ce que l'apprentissage par renforcement ?",
                    "answers"=> [
                      [ "answer"=> "Une méthode d'apprentissage automatique où un agent apprend par essais et erreurs dans un environnement donné.", "is_correct"=> true ],
                      [ "answer"=> "Une technique de supervision humaine pour guider l'apprentissage d'un système d'IA.", "is_correct"=> false ],
                      [ "answer"=> "Un type d'intelligence artificielle basée sur des règles et des logiques prédéfinies.", "is_correct"=> false ],
                      [ "answer"=> "Un algorithme de recherche optimisé pour trouver des solutions dans des espaces de recherche complexes.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les exemples d'applications de l'apprentissage par renforcement ?",
                    "answers"=> [
                      [ "answer"=> "Les robots qui apprennent à jouer à des jeux vidéo ou à effectuer des tâches complexes.", "is_correct"=> true ],
                      [ "answer"=> "Les systèmes de recommandation de produits et de services personnalisés.", "is_correct"=> false ],
                      [ "answer"=> "Les assistants virtuels qui apprennent à s'adapter aux préférences de leurs utilisateurs.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la différence entre l'intelligence artificielle générale (AGI) et l'intelligence artificielle étroite (ANI) ?",
                    "answers"=> [
                      [ "answer"=> "L'AGI est un type d'IA hypothétique capable de comprendre et de raisonner comme un humain, tandis que l'ANI est limitée à des tâches spécifiques.", "is_correct"=> true ],
                      [ "answer"=> "L'AGI est déjà atteinte dans certains domaines, tandis que l'ANI est encore en développement.", "is_correct"=> false ],
                      [ "answer"=> "Il n'y a pas de différence significative entre les deux termes.", "is_correct"=> false ],
                      [ "answer"=> "L'AGI est un objectif irréaliste et impossible à atteindre.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les défis techniques à relever pour développer une AGI ?",
                    "answers"=> [
                      [ "answer"=> "Comprendre la conscience et la subjectivité humaines.", "is_correct"=> true ],
                      [ "answer"=> "Développer des algorithmes d'apprentissage plus puissants et efficaces.", "is_correct"=> false ],
                      [ "answer"=> "Créer des systèmes d'IA capables de raisonner et de prendre des décisions dans des environnements complexes et incertains.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les impacts potentiels de l'AGI sur la société ?",
                    "answers"=> [
                      [ "answer"=> "Une transformation radicale de nombreux aspects de notre vie, de l'économie à la politique.", "is_correct"=> true ],
                      [ "answer"=> "Des risques potentiels liés à la perte de contrôle et aux inégalités accrues.", "is_correct"=> false ],
                      [ "answer"=> "La fin du travail humain et la domination des machines.", "is_correct"=> false ],
                      [ "answer"=> "Il est encore trop tôt pour évaluer les impacts de l'AGI.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment pouvons-nous nous préparer à l'avènement de l'AGI ?",
                    "answers"=> [
                      [ "answer"=> "Encourager la recherche et le développement responsables de l'IA.", "is_correct"=> true ],
                      [ "answer"=> "Éduquer le public aux enjeux de l'IA et favoriser un dialogue ouvert.", "is_correct"=> false ],
                      [ "answer"=> "Mettre en place des cadres éthiques et juridiques clairs pour encadrer le développement et l'utilisation de l'IA.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment l'IA peut-elle contribuer à résoudre les grands défis du monde, tels que le changement climatique et la pauvreté ?",
                    "answers"=> [
                      [ "answer"=> "L'IA peut aider à optimiser la production d'énergie, à développer des solutions de transport durables et à lutter contre la déforestation.", "is_correct"=> true ],
                      [ "answer"=> "L'IA peut aider à identifier les populations les plus vulnérables et à cibler les interventions sociales de manière plus efficace.", "is_correct"=> false ],
                      [ "answer"=> "L'IA peut contribuer à la recherche scientifique et au développement de nouvelles technologies pour relever ces défis.", "is_correct"=> false ],
                      [ "answer"=> "Toutes les réponses ci-dessus.", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel vin rouge est produit dans les environs de Lyon ?",
                    "answers"=> [
                      [
                        "answer"=> "Le Beaujolais",
                        "is_correct"=> true
                      ],
                      [
                        "answer"=> "Le Côtes du Rhône",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Le Hermitage",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Le Châteauneuf-du-Pape",
                        "is_correct"=> false
                      ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la boisson traditionnelle des bouchons lyonnais ?",
                    "answers"=> [
                      [
                        "answer"=> "Le Beaujolais",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Le Côtes du Rhône",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Le Perrier",
                        "is_correct"=> true
                      ],
                      [
                        "answer"=> "Le Citron pressé",
                        "is_correct"=> false
                      ]
                    ]
                  ],
                  [
                    "question"=> "Quel marché en plein air est réputé pour ses produits frais et locaux ?",
                    "answers"=> [
                      [
                        "answer"=> "Le Marché Saint-Antoine",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Le Marché du Quai Saint-Vincent",
                        "is_correct"=> true
                      ],
                      [
                        "answer"=> "Le Marché de la Confluence",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Le Marché de la Croix-Rousse",
                        "is_correct"=> false
                      ]
                    ]
                  ],
                  [
                    "question"=> "Qu'est-ce que Linux ?",
                    "answers"=> [
                      [
                        "answer"=> "Un système d'exploration",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Un système d'orientation",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Un système d'opération",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Un système d'exploitation",
                        "is_correct"=> true
                      ]
                    ]
                  ],
                  [
                    "question"=> "Quelle fête gastronomique annuelle met à l'honneur la cuisine lyonnaise ?",
                    "answers"=> [
                      [ "answer"=> "La Fête des Lumières", "is_correct"=> false ],
                      [ "answer"=> "La Biennale de Lyon", "is_correct"=> false ],
                      [ "answer"=> "Beaujolais Nouveau", "is_correct"=> true ],
                      [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel langage de programmation ont appris les étudiants ?",
                    "answers"=> [
                      [
                        "answer"=> "Le python",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Le javascript",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Le php",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Le Golang",
                        "is_correct"=> true
                      ]
                    ]
                  ],
                  [
                    "question"=> "Quel plat typique lyonnais est servi dans une cocotte en fonte ?",
                    "answers"=> [
                      [ "answer"=> "La Salade Lyonnaise", "is_correct"=> false ],
                      [ "answer"=> "Le Gratin dauphinois", "is_correct"=> false ],
                      [ "answer"=> "Le Murgon", "is_correct"=> true ],
                      [ "answer"=> "Le Saucisson brioché", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle colline offre une vue panoramique sur la ville de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "La Confluence", "is_correct"=> false ],
                      [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                      [ "answer"=> "Fourvière", "is_correct"=> true ],
                      [ "answer"=> "La Croix-Rousse", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel monument religieux domine la ville et est accessible par un funiculaire ?",
                    "answers"=> [
                      [ "answer"=> "La Basilique Notre-Dame de Fourvière", "is_correct"=> true ],
                      [ "answer"=> "Le Gros Horloge", "is_correct"=> false ],
                      [ "answer"=> "La Cathédrale Saint-Jean-Baptiste", "is_correct"=> false ],
                      [ "answer"=> "Le Musée des Confluences", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel jardin public abrite une grande variété de plantes et de fleurs ?",
                    "answers"=> [
                      [ "answer"=> "Le Parc de la Tête d'Or", "is_correct"=> true ],
                      [ "answer"=> "Le Jardin des Plantes", "is_correct"=> false ],
                      [ "answer"=> "Le Parc de Miribel", "is_correct"=> false ],
                      [ "answer"=> "Le Parc Chambord", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel pont moderne relie la Presqu'île à la Confluence ?",
                    "answers"=> [
                      [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                      [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                      [ "answer"=> "Le Pont Saint-Vincent", "is_correct"=> false ],
                      [ "answer"=> "Le Pont Raymond Poincaré", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quel quartier est connu pour ses pentes et ses traboules ?",
                    "answers"=> [
                      [ "answer"=> "La Confluence", "is_correct"=> false ],
                      [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                      [ "answer"=> "La Croix-Rousse", "is_correct"=> true ],
                      [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel musée est consacré à l'histoire de la soie et de son industrie à Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Le Musée des Confluences", "is_correct"=> false ],
                      [ "answer"=> "Le Musée gallo-romain de Fourvière", "is_correct"=> false ],
                      [ "answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false ],
                      [ "answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quel stade de football accueille les matchs de l'Olympique Lyonnais ?",
                    "answers"=> [
                      [ "answer"=> "Le Parc Olympique Lyonnais", "is_correct"=> true ],
                      [ "answer"=> "Le Stade de Gerland", "is_correct"=> false ],
                      [ "answer"=> "Le Matmut Atlantique", "is_correct"=> false ],
                      [ "answer"=> "Le Stadium", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle place centrale accueille la statue de Louis XIV et des événements importants ?",
                    "answers"=> [
                      [ "answer"=> "La Place Bellecour", "is_correct"=> true ],
                      [ "answer"=> "La Place des Terreaux", "is_correct"=> false ],
                      [ "answer"=> "La Place Carnot", "is_correct"=> false ],
                      [ "answer"=> "La Place Saint-Jean", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel quartier étudiant est connu pour son ambiance festive et ses nombreux bars ?",
                    "answers"=> [
                      [ "answer"=> "La Confluence", "is_correct"=> false ],
                      [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                      [ "answer"=> "Le Quartier des Cordeliers", "is_correct"=> true ],
                      [ "answer"=> "Le Quartier de Gerland", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel village médiéval situé sur les hauteurs de Lyon est célèbre pour ses maisons en pierre ?",
                    "answers"=> [
                      [ "answer"=> "Fourvière", "is_correct"=> false ],
                      [ "answer"=> "Sainte-Genève", "is_correct"=> false ],
                      [ "answer"=> "Oingt", "is_correct"=> true ],
                      [ "answer"=> "Condrieu", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel festival de cinéma international se déroule chaque année à Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ],
                      [ "answer"=> "Le Festival Lumière", "is_correct"=> true ],
                      [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                      [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel festival de musiques du monde a lieu chaque été à Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Les Nuits Sonores", "is_correct"=> true ],
                      [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                      [ "answer"=> "Le Salon du Livre de Lyon", "is_correct"=> false ],
                      [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Qu'est-ce qu'une piscine Golang ?",
                    "answers"=> [
                      [
                        "answer"=> "L'endroit où l'on peut nager",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Un mélange de mot",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Un ensemble d'exercice pour apprend le Golang",
                        "is_correct"=> true
                      ],
                      [
                        "answer"=> "Une piscine en forme de G",
                        "is_correct"=> false
                      ]
                    ]
                  ],
                  [
                    "question"=> "Quel festival de danse contemporaine se tient tous les deux ans à Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Les Nuits Sonores", "is_correct"=> false ],
                      [ "answer"=> "Le Festival Lumière", "is_correct"=> false ],
                      [ "answer"=> "La Biennale de la Danse", "is_correct"=> true ],
                      [ "answer"=> "Les Francofolies", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel grand centre commercial est situé dans le quartier de la Part-Dieu ?",
                    "answers"=> [
                      [ "answer"=> "La Confluence", "is_correct"=> false ],
                      [ "answer"=> "La Part-Dieu", "is_correct"=> true ],
                      [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ],
                      [ "answer"=> "Le Centre Commercial Aéroville", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel musée est consacré à l'histoire de la résistance et de la déportation pendant la Seconde Guerre mondiale ?",
                    "answers"=> [
                      [ "answer"=> "Le Musée des Confluences", "is_correct"=> false ],
                      [ "answer"=> "Le Musée national de la Résistance et de la Déportation", "is_correct"=> true ],
                      [ "answer"=> "Le Musée des Beaux-Arts", "is_correct"=> false ],
                      [ "answer"=> "Le Musée des Tissus et des Arts Décoratifs", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel quartier est connu pour ses nombreux ateliers d'artisans et de boutiques de créateurs ?",
                    "answers"=> [
                      [ "answer"=> "La Confluence", "is_correct"=> false ],
                      [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                      [ "answer"=> "La Croix-Rousse", "is_correct"=> true ],
                      [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel événement sportif international se déroule tous les quatre ans à Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Le Marathon de Paris", "is_correct"=> false ],
                      [ "answer"=> "Le Tour de France", "is_correct"=> false ],
                      [ "answer"=> "La Coupe du Monde de football", "is_correct"=> false ],
                      [ "answer"=> "Les Jeux Olympiques", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Qu'est-ce que Ytrack ?",
                    "answers"=> [
                      [
                        "answer"=> "Un site de pour traquer les heures",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Un site pour répertorier ses tâches",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Un site de cyber",
                        "is_correct"=> false
                      ],
                      [
                        "answer"=> "Un site pour apprendre de nouveaux langages de programmation",
                        "is_correct"=> true
                      ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du célèbre tunnel romain reliant la Presqu'île à la Croix-Rousse ?",
                    "answers"=> [
                      [ "answer"=> "Le Pont de la Guillotière", "is_correct"=> false ],
                      [ "answer"=> "Le Tunnel Traboule", "is_correct"=> true ],
                      [ "answer"=> "Le Pont Bonaparte", "is_correct"=> false ],
                      [ "answer"=> "Le Pont Raymond Poincaré", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du fleuve qui traverse la ville de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "La Saône", "is_correct"=> true ],
                      [ "answer"=> "Le Rhône", "is_correct"=> false ],
                      [ "answer"=> "La Loire", "is_correct"=> false ],
                      [ "answer"=> "L'Isère", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "De quel département français la ville de Lyon est-elle la capitale ?",
                    "answers"=> [
                      [ "answer"=> "L'Isère", "is_correct"=> false ],
                      [ "answer"=> "Le Rhône", "is_correct"=> true ],
                      [ "answer"=> "La Loire", "is_correct"=> false ],
                      [ "answer"=> "La Savoie", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la population approximative de la ville de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "400 000 habitants", "is_correct"=> false ],
                      [ "answer"=> "500 000 habitants", "is_correct"=> false ],
                      [ "answer"=> "600 000 habitants", "is_correct"=> true ],
                      [ "answer"=> "700 000 habitants", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Comment se nomme l'aéroport international de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Aéroport Lyon-Saint-Exupéry", "is_correct"=> true ],
                      [ "answer"=> "Aéroport Marseille-Provence", "is_correct"=> false ],
                      [ "answer"=> "Aéroport Nice Côte d'Azur", "is_correct"=> false ],
                      [ "answer"=> "Aéroport de Genève", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quels sont les principaux moyens de transport en commun à Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Métro, tramway, bus", "is_correct"=> true ],
                      [ "answer"=> "Train, RER, bus", "is_correct"=> false ],
                      [ "answer"=> "Métro, bus", "is_correct"=> false ],
                      [ "answer"=> "Tramway, bus", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la langue officielle parlée à Lyon ?",
                    "answers"=> [
                      [ "answer"=> "Français", "is_correct"=> true ],
                      [ "answer"=> "Anglais", "is_correct"=> false ],
                      [ "answer"=> "Espagnol", "is_correct"=> false ],
                      [ "answer"=> "Italien", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quelle est la devise utilisée en France ?",
                    "answers"=> [
                      [ "answer"=> "Le Franc", "is_correct"=> false ],
                      [ "answer"=> "Le Mark", "is_correct"=> false ],
                      [ "answer"=> "L'Euro", "is_correct"=> true ],
                      [ "answer"=> "Le Franc suisse", "is_correct"=> false ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du quartier d'affaires de Lyon ?",
                    "answers"=> [
                      [ "answer"=> "La Confluence", "is_correct"=> true ],
                      [ "answer"=> "La Part-Dieu", "is_correct"=> false ],
                      [ "answer"=> "La Croix-Rousse", "is_correct"=> false ],
                      [ "answer"=> "Le Vieux Lyon", "is_correct"=> false ]
                    ]
                  ],


                  [
                    "question"=> "Combien il y a eu d'évaluation, raids compris pendant les Ymmersions ?",
                    "answers"=> [
                      [ "answer"=> "4", "is_correct"=> false ],
                      [ "answer"=> "7", "is_correct"=> false ],
                      [ "answer"=> "5", "is_correct"=> false ],
                      [ "answer"=> "6", "is_correct"=> true ]
                    ]
                  ],
                  [
                    "question"=> "Quel est le nom du personnage historique célèbre ayant vécu à Lyon et connu pour ses romans policiers ?",
                    "answers"=> [
                      [ "answer"=> "Alexandre Dumas", "is_correct"=> false ],
                      [ "answer"=> "12 jours", "is_correct"=> false ],
                      [ "answer"=> "Joseph Kessel", "is_correct"=> true ],
                      [ "answer"=> "Emile Zola", "is_correct"=> false ]
                    ]
                  ],




            ];

            foreach ($questions as $question) {
                $questionModel = \App\Models\Questions::create([
                    'question' => $question['question']
                ]);

                foreach ($question['answers'] as $answer) {
                    $questionModel->answers()->create($answer);
                }
            }
    }
}
