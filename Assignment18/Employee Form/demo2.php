<?php

$fname = $_REQUEST['fname']; 
$lname = $_REQUEST['lname'];
$mob = $_REQUEST['mb'];
$desg = $_REQUEST['desg'];
$dept = $_REQUEST['dept'];
$sal = $_REQUEST['sal'];

$user = "root";
$password = "";
$db = "localhost";
$database = "mydb";
$conn = mysqli_connect($db,$user,$password,$database);

if(!$conn)

{
    echo"Error";
}
else
{
    
    function insert($conn,$fname,$lname,$mob,$desg,$dept,$sal)
    {
        $sql = "INSERT into employee_info(e_id,fname,lname,mob,desg,dept,sal)VALUES('','$fname','$lname','$mob','$desg','$dept','$sal')";
        $result = mysqli_query($conn,$sql);
        if(!$result)
        {
            echo"ERROR";
        }
        else
        {
            echo"Data Inserted Successfully!!!";
        }
    }

    function delete($conn,$fname)
    {
        $sql = "DELETE  from employee_info where fname='$fname'";
        $result = mysqli_query($conn,$sql);
        if(!$result)
        {
            echo"ERROR";
        }
        else
        {
            echo"Data Deleted Successfully!!!";
        }
    }

    function display($conn,$fname)
    {
        
        $sql="SELECT * from employee_info where fname='$fname' ";
          $result = mysqli_query($conn,$sql);
          echo"<center><h1>Employee's Information</h1></center>
          <table border=2 align=center width=50%>
              <tr><th>E_ID</th> <th>First Name</th> <th>Last Name</th> <th>Mobile No</th> <th>Designation</th>
              <th>Department</th> <th>Salary</th>
          </tr>";
          
          while($rows=mysqli_fetch_assoc($result))

          {
            echo "<tr> <th>".$rows['e_id']."</th> <th>".$rows['fname']."</th> <th>".$rows['lname']."</th> 
            <th>".$rows['mob']."</th> <th>".$rows['desg']."</th> <th>".$rows['dept']."</th>
            <th>".$rows['sal']."</th>
            </tr>";
          }
          echo"</table>";
    }

    if(array_key_exists('insert',$_POST))
    {
        insert($conn,$fname,$lname,$mob,$desg,$dept,$sal);
    }
    else if(array_key_exists('delete',$_POST))
    {
        delete($conn,$fname);
    }
    else if(array_key_exists('display',$_POST))
    {
        display($conn,$fname);
    }
}
?>
<html>
    <body>
        <a href="demo.html">Back</a>
    </body>
</html>



<!-- app.component.html -->

<!-- <div class="container">
  <h1>Welcome to {{ title }}!!</h1>
  <form [formGroup]="angForm" novalidate>
    <div class="form-group">
      <label>Name:</label>
      <input class="form-control" formControlName="name" type="text" />
    </div>
    <div
      *ngIf="
        angForm.controls['name'].invalid &&
        (angForm.controls['name'].dirty || angForm.controls['name'].touched)
      "
      class="alert alert-danger"
    >
      <div *ngIf="angForm.controls['name'].errors; required">
        Name is required.
      </div>
    </div>
    <div class="form-group">
      <label>Address:</label>
      <input class="form-control" formControlName="address" type="text" />
    </div>
    <div
      *ngIf="
        angForm.controls['address'].invalid &&
        (angForm.controls['address'].dirty ||
          angForm.controls['address'].touched)
      "
      class="alert alert-danger"
    >
      <div *ngIf="angForm.controls['address'].errors; required">
        Address is required.
      </div>
    </div>
    <button
      type="submit"
      [disabled]="angForm.pristine || angForm.invalid"
      class="btn btn-success"
    >
      Save
    </button>
  </form>
  <br />
  <p>Form value: {{ angForm.value | json }}</p>
  <p>Form status: {{ angForm.status | json }}</p>
</div> -->

<!-- app.component.ts -->

<!-- import { Component } from '@angular/core';
import { FormGroup,  FormBuilder,  Validators } from '@angular/forms';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
    title = 'Angular Form Validation Tutorial';
    angForm !: FormGroup;
    constructor(private fb: FormBuilder) {
      this.createForm();
  }
  createForm() {
   this.angForm = this.fb.group({
      name: ['', Validators.required ],
      address: ['', Validators.required ]
   });
  }
} -->

<!-- app.module.ts -->
import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppComponent } from './app.component';
import { ReactiveFormsModule } from '@angular/forms';

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
	ReactiveFormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }