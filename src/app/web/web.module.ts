import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { WebRoutingModule } from './web-routing.module';
import { HomeComponent } from './pages/home/home.component';
import { AboutComponent } from './pages/about/about.component';
import { PricingComponent } from './pages/pricing/pricing.component';
import { ContactComponent } from './pages/contact/contact.component';
import { WrapperComponent } from './wrapper.component';
import { NavbarComponent } from './widgets/navbar/navbar.component';
import { SharedModule } from '../shared/shared.module';

@NgModule({
  declarations: [
    HomeComponent,
    AboutComponent,
    PricingComponent,
    ContactComponent,
    WrapperComponent,
    NavbarComponent,
  ],
  imports: [CommonModule, WebRoutingModule, SharedModule],
})
export class WebModule {}
