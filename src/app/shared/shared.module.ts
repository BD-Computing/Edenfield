import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { GradientBackgroundComponent } from './widgets/gradient-background/gradient-background.component';

@NgModule({
  declarations: [GradientBackgroundComponent],
  imports: [CommonModule, FormsModule, ReactiveFormsModule],
  exports: [FormsModule, ReactiveFormsModule, GradientBackgroundComponent],
})
export class SharedModule {}
