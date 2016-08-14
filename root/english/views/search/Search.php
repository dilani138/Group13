<div class="container">
    <?php
        include("../../includes/main/header.php");
        include("../../includes/navigations/nav_active_search.php");
    ?>
</div>

<div class="content">
    <div class="col-b-1">
        <table cellspacing="10" align="center">

<!--district.center,course........................................................................................................-->
  <tr>
    <th><img src = "search/district.jpg" align ="left" ></th>
	<th><img src = "search/center.jpg" align ="center" ></th>
	<th><img src = "search/course.jpg" align ="right" ></th>
  </tr>
  
  
  <tr>
  
  <!--district......................................................................................................................-->
    <td><span class="required">  </span><select name="field4" align ="left" bgcolor="#ffcc99" class="select-field"><br><br/>
																<option Course_value="Galle">##################</option>
																<option Course_value="Galle">Galle</option>
																<option Course_value="Mathara">Mathara</option>
																<option Course_value="Colombo">Colombo</option>
        </select>
    </td>
																
	<!--center..........................................................................................................................-->															
    <td><span class="required">  </span><select name="field4" align ="center" class="select-field"><br><br/>
																<option Course_value="#####">###################</option>
																<option Course_value="ddddd">ddddd</option> </select>
    </td>
	<!--course...........................................................................................................................-->															
	<td><span class="required">  </span><select name="field4" align ="right"class="select-field"><br><br/>
																<option Course_value="Galle">###################</option>
																<option Course_value="Appointment">Appointment</option>
																<option Course_value="Interview">Interview</option>
                                                                <option Course_value="Regarding a post">Regarding a post</option>
        </select>
    </td>

<!--search................................................................................................................................-->																
	<td><img src = "search/search.jpg" align ="right" type="search" id="mySearch"></td>																
  </tr>
</table>
    </div>
</div>

 <?php
        include("../../includes/main/footer.php");
?>