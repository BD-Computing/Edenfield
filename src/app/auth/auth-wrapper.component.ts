import { Component } from '@angular/core';
import { AppName } from '../constants';

@Component({
  selector: 'app-auth-wrapper',
  templateUrl: './auth-wrapper.component.html',
  styleUrls: ['./auth-wrapper.component.scss'],
})
export class AuthWrapperComponent {
  appName = AppName;
  year = new Date().getFullYear();
}
