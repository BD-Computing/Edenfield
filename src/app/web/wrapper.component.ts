import { Component } from '@angular/core';
import { AppName } from '../constants';

@Component({
  selector: 'app-wrapper',
  templateUrl: './wrapper.component.html',
  styleUrls: ['./wrapper.component.scss'],
})
export class WrapperComponent {
  appName = AppName;
  year = new Date().getFullYear();
}
