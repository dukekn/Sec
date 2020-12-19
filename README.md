# Sec
<h1>Checkout Lane</h1>

<table>
  <thead> 
  <tr>
  <th>Code</th>
  <th>Min Qtty</th>
  <th>Price per Min Qtty</th>
  </tr>
  </thead>
  <tbody>
    <tr>
    <td>ZA</td>
    <td>1</td>
    <td>2</td>
    </tr>
    <tr>
    <td>ZA</td>
    <td>4</td>
    <td>7</td>
    </tr>
    <tr>
    <td>YB</td>
    <td>1</td>
    <td>12</td>
    </tr>
        <tr>
    <td>FC</td>
    <td>1</td>
    <td>1.25</td>
    </tr>
        <tr>
    <td>FC</td>
    <td>6</td>
    <td>6</td>
    </tr>
            <tr>
    <td>GD</td>
    <td>1</td>
    <td>0.15</td>
    </tr>
  </tbody>
</table>

<h2>Example usage:</h2>
<br/>
//Set pricelist<br/>
$terminal = new Terminal($pricelist);<br/>
//Scanning items<br/>
$terminal->scanItem("ZA");<br/>
$terminal->scanItem("YB");<br/>
$terminal->scanItem("FC");<br/>
$terminal->scanItem("GD");<br/>
$terminal->scanItem("ZA");<br/>
$terminal->scanItem("YB");<br/>
$terminal->scanItem("ZA");<br/>
$terminal->scanItem("ZA");<br/>

//Get total purchase<br/>
$terminal->getTotal()

<h2>Expected result:</h2>
<strong>32.40</strong>
