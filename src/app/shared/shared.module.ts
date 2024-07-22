import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { CurrencyPipe } from './pipes/currency.pipe';
import { ScriptsService } from './services/scripts.service';

@NgModule({
  declarations: [CurrencyPipe],
  imports: [CommonModule, FormsModule, ReactiveFormsModule],
  providers: [ScriptsService],
})
export class SharedModule {}
