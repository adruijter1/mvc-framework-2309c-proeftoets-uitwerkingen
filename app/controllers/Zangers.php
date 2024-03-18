<?php
    class Zangers extends BaseController
    {
        /**
         * In de class variable $zangerModel stoppen we 
         * het object van de country class
         */
        private $zangerModel;

        /**
         * De constructor maakt een nieuw object van 
         * de zanger class
         */
        public function __construct()
        {
            /**
             * Bij het aanroepen van de model Zanger wordt er
             * een nieuw object gemaakt van deze class
             */
            $this->zangerModel = $this->model('Zanger');
        }

        /**
         * Dit is de index method voor de Zangers controller
         */
        public function index()
        {
            /**
             * We roepen de model method getZangers() aan
             */
            $zangers = $this->zangerModel->getZangers();
            //var_dump($zangers);

            $dataRows = '';
            foreach ($zangers as $zanger) {
                $dataRows .= "<tr>
                                <td>$zanger->Naam</td>
                                <td>$zanger->NettoWaarde</td>
                                <td>$zanger->Land</td>
                                <td>$zanger->Mobiel</td>
                                <td>$zanger->Leeftijd</td>
                            </tr>";
            }

            /**
             * Maak een $data-array voor het meegeven van info in de view
             */
            $data = [
                'title' => 'Top 5 rijkste zangeressen van de wereld',
                'dataRows' => $dataRows
            ];

            /**
             * We voegen de view toe met informatie uit het $data-array
             */
            $this->view('zangers/index', $data);
        }
    }

?>