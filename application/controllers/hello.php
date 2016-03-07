<?php
class Hello extends CI_Controller {
function index()
{
$this->accueil();
}
function accueil ()
{
$this->load->view('helloMessage');
}
function accueilChaleureux()
{
$this->load->view('helloChaleureux');
}
function accueilPersonnalise($unPseudo)
{
	// creation d'un tableau associatif $data contenant les cles et les valeurs � transmettre
	$data=array();
// $nom est la cle qui permet d'acc�der � la valeur $unPseudo stock� tableau associatif $data pass� � la vue lors du chargement avec load->view()
	$data['nom']=$unPseudo;
	$this->load->view('helloPersonnalise',$data);
}
function accueilFormel($uneCivilite,$unPrenom,$unNom)
{
	// creation d'un tableau associatif contenant les cles et les valeurs � transmettre
	$data=array();
	$data['civilite']=$uneCivilite;
	$data['prenom']=$unPrenom;
	$data['nom']=$unNom;
	// Appel de la vue en lui transmettant le tableau associatif.
	$this->load->view('helloFormel',$data);
}
}
/* End of file hello.php */
/* Location: ./application/controllers/hello.php */
?>

