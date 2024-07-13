import { Component, Input } from '@angular/core';
import { AppFeatureInterface } from '../../data/features.data';

@Component({
  selector: 'app-feature-renderer',
  templateUrl: './feature-renderer.component.html',
  styleUrls: ['./feature-renderer.component.scss'],
})
export class FeatureRendererComponent {
  @Input({ required: true }) feature?: AppFeatureInterface;
}
