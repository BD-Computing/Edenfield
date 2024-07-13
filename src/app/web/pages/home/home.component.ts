import { Component } from '@angular/core';
import { AppName } from 'src/app/constants';
import { MetaService } from 'src/app/shared/services/meta.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss'],
})
export class HomeComponent {
  appName = AppName;

  constructor(private readonly metaService: MetaService) {
    this.metaService.updateMetaData({ title: 'Home' });
  }
}
