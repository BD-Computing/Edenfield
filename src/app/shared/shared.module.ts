import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { GradientBackgroundComponent } from './widgets/gradient-background/gradient-background.component';
import { FeaturesSliderComponent } from './widgets/features-slider/features-slider.component';
import { FeatureRendererComponent } from './widgets/feature-renderer/feature-renderer.component';
import { CurrencyPipe } from './pipes/currency.pipe';

@NgModule({
  declarations: [
    GradientBackgroundComponent,
    FeaturesSliderComponent,
    FeatureRendererComponent,
    CurrencyPipe,
  ],
  imports: [CommonModule, FormsModule, ReactiveFormsModule],
  exports: [
    FormsModule,
    ReactiveFormsModule,
    GradientBackgroundComponent,
    FeaturesSliderComponent,
    CurrencyPipe,
  ],
})
export class SharedModule {}
