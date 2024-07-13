import { Component } from '@angular/core';
import { AppFeatureInterface, AppFeaturesData } from '../../data/features.data';

@Component({
  selector: 'app-features-slider',
  templateUrl: './features-slider.component.html',
  styleUrls: ['./features-slider.component.scss'],
})
export class FeaturesSliderComponent {
  features: AppFeatureInterface[] = AppFeaturesData;
  reversedFeatures = this.features.reverse();
}
