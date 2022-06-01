<?php
class Earbuds {
  // Properties
  public $item;
  public $version;
  public $name;
  public $price;
  public $color;

  // Methods
  function set_item($item) {
    $this->item= $item;
  }
  function get_item() {
    return $this->item;
  }
  function set_version($version) {
    $this->version= $version;
  }
  function get_version() {
    return $this->version;
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
}

$earbuds = new Earbuds();
$earbuds->set_item('Wireless Earbuds');
$earbuds->set_version('Wireless without wire');
$earbuds->set_name('Airpods Pro');
$earbuds->set_price('$199');
$earbuds->set_color('White');
echo "Item: " . $earbuds->get_item();
echo "<br>";
echo "Version: " . $earbuds->get_version();
echo "<br>";
echo "Name: " . $earbuds->get_name();
echo "<br>";
echo "Price: " . $earbuds->get_price();
echo "<br>";
echo "Color: " . $earbuds->get_color();
?>
