<? php
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<style>';
echo 'body{';
echo 'background-color: #f5f5dc;';
echo '}';
echo '</style>';
echo '<meta charset="utf-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<title>Selection</title>';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">';
echo '<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>';
echo '<script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>';
echo '<link rel="stylesheet" href="bulmastarter.css">';
echo '</head>';
echo '<body>';
echo '<script src="bulmastarterjs.js"></script>';
echo '<nav class="navbar is-dark" role="navigation" aria-label="main navigation">';
echo '<div class="navbar-brand">';
echo '<a class="navbar-item">';
echo '<img src="ongc_logo.png"height="80px;"width="40px;">';
echo '</a>';
echo '<a class="navbar-item">';
echo 'Home';
echo '</a>';
echo '<a class="navbar-item" id="se" onclick="toggle()">';
echo 'Seismic Data';
echo '</a>';
echo '<a class="navbar-item" id="wel" onclick="well()">';
echo 'Well Data';
echo '</a>';
echo '<a class="navbar-item" id="G" onclick="report()">';
echo 'G&G Report';
echo '</a>';
echo '<button class="button navbar-burger">';
echo '<span></span>';
echo '<span></span>';
echo '<span></span>';
echo '</button>';
echo '</div>';
echo '</nav>';
echo '<div id="seis">';
echo '<div class="card" style="width:20rem;">';
echo '<div class="card-body" style="background-color:#f2f2c1;">';
echo '';
echo '<h3 class="card-title">Seismic Data</h3>';
echo '<p class="card-text"></p>';
echo '<div class="wrap">';
echo '<div class="select-editable">';
echo '<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">';
echo '<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">';
echo '<option></option>';
echo '<option value="Petrol">Petrol</option>';
echo '<option value="Landmark">Landmark</option>';
echo '<option value="Geology">Geology</option>';
echo '<option value="Kingdom">Kingdom</option>';
echo '</select>';
echo '<input name="displayValue" placeholder="Software" style="position:absolute;top:0px;left:200px;width:120px;width:170px\9;#width:183px;height:25px; height:28px\9;#height:18px;border:1px solid #A9A9A9;"  type="text">';
echo '<input name="idValue" id="idValue" type="hidden">';
echo '</div>';
echo '</div>';
echo '<div class="wrap">';
echo '<div class="select-editable">';
echo '<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">';
echo '<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">';
echo '<option></option>';
echo '<option value="Ganga">Ganga</option>';
echo '<option value="HF">HF</option>';
echo '<option value="Rajasthan">Rajasthan</option>';
echo '<option value="Satpura">Satpura</option>';
echo '<option value="South-Rewa">South-Rewa</option>';
echo '<option value="Vindhyan">Vindhyan</option>';
echo '<option value="Vindhyan-Chambal">Vindhyan-Chambal</option>';
echo '<option value="Vindhyan-Son">Vindhyan-Son</option>';
echo '</select>';
echo '<input name="displayValue" placeholder="Block" style="position:absolute;top:0px;left:200px;width:120px;width:170px\9;#width:180px;height:21px; height:28px\9;#height:18px;border:1px solid #A9A9A9;" onfocus="this.select()" type="text">';
echo '<input name="idValue" id="idValue" type="hidden">';
echo '</div>       </div>';
echo '<div class="wrap">';
echo '<div class="left">';
echo '<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">';
echo '<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">';
echo '<option></option>';
echo '<option value="2D">2D</option>';
echo '<option value="3D">3D</option>';
echo '</select>';
echo '<input name="displayValue" placeholder="Volume" style="position:absolute;top:0px;left:200px;width:120px;width:180px\9;#width:180px;height:21px; height:28px\9;#height:18px;border:1px solid #A9A9A9;" onfocus="this.select()" type="text">';
echo '<input name="idValue" id="idValue" type="hidden">';
echo '</div>  </select>';
echo '</div>';
echo '<label class="container">Area';
echo '<input type="checkbox" checked="checked">';
echo '<span class="ark"></span>';
echo '</label>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="select-editable">';
echo '<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">';
echo '<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">';
echo '<option></option>';
echo '<option value="TIF">TIF</option>';
echo '<option value="TIFF">TIFF</option>';
echo '<option value="TIFF,PDF">TIFF,PDF</option>';
echo '<option value="VEL">VEL</option>';
echo '<option value="WORD">WORD</option>';
echo '<option value="WORD,XLS">WORD,XLS</option>';
echo '</select>';
echo '<input name="displayValue" placeholder="Data Category" style="position:absolute;top:0px;left:200px;width:120px;width:180px\9;#width:180px;height:21px; height:28px\9;#height:18px;border:1px solid #A9A9A9;" onfocus="this.select()" type="text">';
echo '<input name="idValue" id="idValue" type="hidden">';
echo '</div></div>';
echo '<div class="select-editable">';
echo '<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">';
echo '<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">';
echo '<option></option>';
echo '<option value="ASCII">ASCII</option>';
echo '<option value="DAT">DAT</option>';
echo '<option value="DOC">DOC</option>';
echo '<option value="ESSO">ESSO</option>';
echo '<option value="PDF">SEGD</option>';
echo '<option value="SEGY">SEGY</option>';
echo '<option value="SPS">SPS</option>';
echo '<option value="TEXT">TEXT</option>';
echo '</select>';
echo '';
echo '<input name="displayValue" placeholder="Data Format" style="position:absolute;top:0px;left:200px;width:120px;width:180px\9;#width:180px;height:21px; height:28px\9;#height:18px;border:1px solid #A9A9A9;" onfocus="this.select()" type="text">';
echo '<input name="idValue" id="idValue" type="hidden">';
echo '</div>';
echo '<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">';
echo '<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">';
echo '<option></option>';
echo '<option value="Data Sheet">Data Sheet</option>';
echo '<option value="Geometry">Geometry</option>';
echo '<option value="Processed">Processed</option>';
echo '<option value="Gathers">Gathers</option>';
echo '<option value="Raw">Raw</option>';
echo '<option value="SPS">SPS</option>';
echo '<option value="Velocity">Velocity</option>';
echo '</select>';
echo '<input name="displayValue" placeholder="Data Category Set" style="position:absolute;top:0px;left:200px;width:120px;width:180px\9;#width:180px;height:21px; height:28px\9;#height:18px;border:1px solid #A9A9A9;" onfocus="this.select()" type="text">';
echo '<input name="idValue" id="idValue" type="hidden">';
echo '</div>';
echo '</div>';
echo '<label class="container">SIG';
echo '<input type="checkbox" checked="checked">';
echo '<span class="checkmark"></span>';
echo '</label><br>';
echo '<label class="container">Line/Swath';
echo '<input type="checkbox" checked="checked">';
echo '<span class="checkmark"></span>';
echo '</label>';
echo '<div class="control">';
echo '<button class="button is-primary">Submit</button>';
echo '</div>';
echo '</div>';
echo '';
echo '<script>';
echo 'function toggle(){';
echo 'var x=document.getElementById("seis");';
echo 'if (x.style.display === "none") {';
echo 'x.style.display= "block";';
echo '} else {';
echo 'x.style.display = "none";';
echo '}';
echo '}';
echo '</script>';
echo '</div>';
echo '<!--------------WELL DATA------------>';
echo '';
echo '<div id="welldata">';
echo '<div class="card" style="width:20rem;">';
echo '<div class="card-body" style="background-color:#c12c1c1;">';
echo '<h3 class="card-title">Well Data</h3>';
echo '<p class="card-text"></p>';
echo '<div class="wrap">';
echo '<div class="select-editable">';
echo '<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">';
echo '<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">';
echo '<option></option>';
echo '<option value="Ganga">Ganga</option>';
echo '<option value="HF">HF</option>';
echo '<option value="Rajasthan">Rajasthan</option>';
echo '<option value="Satpura">Satpura</option>';
echo '<option value="South-Rewa">South-Rewa</option>';
echo '<option value="Vindhyan">Vindhyan</option>';
echo '<option value="Vindhyan-Chambal">Vindhyan-Chambal</option>';
echo '<option value="Vindhyan-Son">Vindhyan-Son</option>';
echo '</select>';
echo '<input name="displayValue" placeholder="Block" style="position:absolute;top:0px;left:200px;width:120px;width:180px\9;#width:180px;height:21px; height:28px\9;#height:18px;border:1px solid #A9A9A9;" onfocus="this.select()" type="text">';
echo '<input name="idValue" id="idValue" type="hidden">';
echo '</div>       </div>';
echo '';
echo '';
echo '<div class="wrap">';
echo '<div class="select-editable">';
echo '<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">';
echo '<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">';
echo '<option></option>';
echo '</select>';
echo '<input name="displayValue" placeholder="Well Name" style="position:absolute;top:0px;left:200px;width:120px;width:170px\9;#width:180px;height:21px; height:28px\9;#height:18px;border:1px solid #A9A9A9;" onfocus="this.select()" type="text">';
echo '<input name="idValue" id="idValue" type="hidden">';
echo '</div>       </div>';
echo '<div class="select-editable">';
echo '<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">';
echo '<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">';
echo '<option></option>';
echo '<option value="LAS">LAS</option>';
echo '<option value="PDF">PDF</option>';
echo '</select>';
echo '<input name="displayValue" placeholder="Data Format" style="position:absolute;top:0px;left:200px;width:120px;width:170px\9;#width:180px;height:21px; height:28px\9;#height:18px;border:1px solid #A9A9A9;" onfocus="this.select()" type="text">';
echo '<input name="idValue" id="idValue" type="hidden">';
echo '</div>       </div>';
echo '<div class="wrap">';
echo '<div class="select-editable">';
echo '<div style="position:relative;width:150x;height:25px;border:0;padding:0;margin:0;">';
echo '<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">';
echo '<option></option>';
echo '<option value="Composite-Log">Composite Log</option>';
echo '<option value="Merged-Log">Merged-Log</option>';
echo '<option value="Original">Original</option>';
echo '<option value="Raw">Raw</option>';
echo '</select>';
echo '<input name="displayValue" placeholder="Data Type" style="position:absolute;top:0px;left:200px;width:120px;width:180px\9;#width:180px;height:21px; height:28px\9;#height:18px;border:1px solid #A9A9A9;" onfocus="this.select()" type="text">';
echo '<input name="idValue" id="idValue" type="hidden">';
echo '</div>       </div>';
echo '';
echo '<div class="control">';
echo '<button class="button is-primary">Submit</button>';
echo '</div>';
echo '';
echo '</div>';
echo '</div>';
echo '<script>';
echo 'function well(){';
echo 'var y=document.getElementById("welldata");';
echo 'if (y.style.display === "none") {';
echo 'y.style.display="block";';
echo '} else {';
echo 'y.style.display = "none";';
echo '}';
echo '}';
echo '</script>';
echo '</div>';
echo '<!--G&G REPORT-->';
echo '';
echo '<div id="greport">';
echo '<div class="card" style="width:20rem;">';
echo '<div class="card-body" style="background-color:#f2f2c2;">';
echo '<h3 class="card-title">G&G Report</h3>';
echo '<p class="card-text"></p>';
echo '<div class="select-editable">';
echo '<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">';
echo '<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">';
echo '<option></option>';
echo '';
echo '</select>';
echo '<input name="displayValue" placeholder="SIG/WELL" style="position:absolute;top:0px;left:200px;width:120px;width:170px\9;#width:180px;height:21px; height:28px\9;#height:18px;border:1px solid #A9A9A9;" onfocus="this.select()" type="text">';
echo '<input name="idValue" id="idValue" type="hidden">';
echo '</div>';
echo '';
echo '<div class="select-editable">';
echo '<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">';
echo '<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">';
echo '<option></option>';
echo '<option value="Petrol">Petrol</option>';
echo '<option value="Landmark">Landmark</option>';
echo '<option value="Geology">Geology</option>';
echo '<option value="Kingdom">Kingdom</option>';
echo '';
echo '</select>';
echo '<input name="displayValue" placeholder="Software" style="position:absolute;top:0px;left:200px;width:120px;width:170px\9;#width:180px;height:21px; height:28px\9;#height:18px;border:1px solid #A9A9A9;" onfocus="this.select()" type="text">';
echo '<input name="idValue" id="idValue" type="hidden">';
echo '</div>';
echo '';
echo '<div class="control">';
echo '<button class="button is-primary">Submit</button>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<script>';
echo 'function report(){';
echo 'var z=document.getElementById("greport");';
echo 'if (z.style.display === "none") {';
echo 'z.style.display = "block";';
echo '';
echo '} else {';
echo 'z.style.display = "none";';
echo '}';
echo '}';
echo '';
echo '</script>';
echo '</div>';
echo '</body>';
echo '</html>';
?>