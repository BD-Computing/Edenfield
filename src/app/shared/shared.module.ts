import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { GradientBackgroundComponent } from './widgets/gradient-background/gradient-background.component';
import { FeaturesSliderComponent } from './widgets/features-slider/features-slider.component';
import { FeatureRendererComponent } from './widgets/feature-renderer/feature-renderer.component';

@NgModule({
  declarations: [GradientBackgroundComponent, FeaturesSliderComponent, FeatureRendererComponent],
  imports: [CommonModule, FormsModule, ReactiveFormsModule],
  exports: [
    FormsModule,
    ReactiveFormsModule,
    GradientBackgroundComponent,
    FeaturesSliderComponent,
  ],
})
export class SharedModule {}
