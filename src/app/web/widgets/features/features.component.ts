import { Component } from '@angular/core';
import { AppName } from 'src/app/constants';
import {
  AppFeatureInterface,
  AppFeaturesData,
} from 'src/app/shared/data/features.data';

@Component({
  selector: 'app-features',
  templateUrl: './features.component.html',
  styleUrls: ['./features.component.scss'],
})
export class FeaturesComponent {
  appName = AppName;
  features: AppFeatureInterface[] = AppFeaturesData;
}
