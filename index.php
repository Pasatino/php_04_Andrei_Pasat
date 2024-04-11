<?php

/* - Crea una classe Company che abbia i seguenti attributi pubblici: 
name: nome dell’azienda; 
location: stato in cui  è ubicata la sede dell’azienda; 
tot_employees: numero di dipendenti assunti in quella sede (di default, 0); 

- Crea 5 istanze di 5 aziende diverse Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendenti, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“; 

- Implementa un nuovo metodo che, per ogni oggetto Company istanziati, calcoli la spesa annuale e la stampi per ogni oggetto. 
- Implementa un nuovo metodo che è in grado di calcolare l’insieme totale delle spese di tutte le aziende create. 
- Implementa un metodo statico che permetta di stampare a terminale questo totale assoluto di tutte le aziende messe insieme. 
 */

class Company{
    public $companyName;
    public $location;
    public $employees;
    public $stipendio;
    public static $salaryAllCompany = 0;
    public function __construct ($companyName, $location, $employees, $stipendio)
    {
        $this->companyName = $companyName;
        $this->location = $location;
        $this->employees = $employees;
        $this->stipendio = $stipendio;

    }
public function employee(){
    if($this->employees >0){
        echo "L’ufficio $this->companyName con sede in $this->location ha ben $this->employees \n";
    } else { 
        echo "L’ufficio $this->companyName con sede in $this->location non ha dipendenti \n";

    }
}

    public function annualExpense(){
        $annualExpense = $this->employees * $this->stipendio;
        echo "La spesa anuale dell'azienda $this->companyName è $annualExpense € \n";
        self::$salaryAllCompany += $annualExpense;
    }

    public static function allCompany(){
        return self::$salaryAllCompany;
    }
}
$Company1 = new Company ("Aulab", "Italia",50, 5000);
$Company2 = new Company ("Faclon", "Italia", 0, 1600);
$Company3 = new Company ("Eurospin", "Italia", 10000, 1400);
$Company4 = new Company ("Apple", "USA", 50000, 2500);
$Company5 = new Company ("Playstation", "USA", 50000, 2500);

/* var_dump ($Company1, $Company2, $Company3, $Company4, $Company5); */

$Company1->annualExpense();
$Company2->annualExpense(); 
$Company3->annualExpense(); 
$Company4->annualExpense(); 
$Company5->annualExpense();

$Company1->employee();
$Company2->employee();
$Company3->employee();
$Company4->employee();
$Company5->employee();

echo "La spesa totale di tutte le aziende è \n" . Company::allCompany();