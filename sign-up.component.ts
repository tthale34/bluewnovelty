import { Component, OnInit } from '@angular/core';
import { ActivatedRoute,Router } from '@angular/router';
import { ApiGatewayService } from '../../services/api-gateway.service';

@Component({
  selector: 'app-sign-up',
  templateUrl: './sign-up.component.html',
  styleUrls: ['./sign-up.component.scss']
})
export class SignUpComponent implements OnInit {

  constructor(private router: Router,private _api: ApiGatewayService) { }
  sign_up = {
    name:'',
    surname:'',
    company_name:'',
    email:'',
    dob:'',
    gender:'',
    content_type:'',
    which_photography:'',
    which_photography1:'',
  }
  ngOnInit(){
  }
  nav(myNavigator=''){
    this.router.navigate([myNavigator]);
  }
  clear(){
    this.sign_up.name='';
    this.sign_up.surname='';
    this.sign_up.company_name='';
    this.sign_up.email='';
    this.sign_up.dob='';
    this.sign_up.gender='';
    this.sign_up.content_type='';
    this.sign_up.which_photography='';
    this.sign_up.which_photography1='';
  }
  submit(){
    // await this.api.submitSignup
    this._api.submitClaim(this.sign_up).then(res => {
      console.log(res);
      if(res.Status){
        alert(res.Message);
        // this.spinner.hide(); 
	      // this.router.navigate(['claims-home'])
      }
      else{
        // this.spinner.hide();
        alert('Could not process your request now, try again');
      }
    }).catch(err=>{
      // this.spinner.hide();
      alert('Could not process your request now, try again');
    })
  }

}
