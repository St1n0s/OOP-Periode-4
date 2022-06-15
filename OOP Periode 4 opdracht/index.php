<?php
class Earbuds {
  // Properties
  protected $item;
  protected $name;
  protected $price;
  protected $color;

  // Methods
  function set_item($item) {
    $this->item= $item;
  }
  function get_item() {
    return $this->item;
  }
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_price($price) {
    $this->price = $price;
  }
  function get_price() {
    return $this->price;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
  public function __construct($version) {
  $this->version = $version;
  }

  public function intro() {
  echo "The Sort of this earbud is {$this->version}";
  }

}


$earbuds = new Earbuds("Wired");
$earbuds->set_item('Wireless Earbuds');
$earbuds->set_name('Airpods Pro');
$earbuds->set_price('$199');
$earbuds->set_color('White');
echo "Item: " . $earbuds->get_item();
echo "<br>";
echo "Name: " . $earbuds->get_name();
echo "<br>";
echo "Price: " . $earbuds->get_price();
echo "<br>";
echo "Color: " . $earbuds->get_color();



class Sort extends Earbuds {
public function message() {
  echo "<br>";
  echo "Am I wireless, wired or wireless with reciever? ";
}
}
$strawberry = new Sort("Wired");
$strawberry->message();
$strawberry->intro();

?>
