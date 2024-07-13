import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { WebRoutingModule } from './web-routing.module';
import { HomeComponent } from './pages/home/home.component';
import { AboutComponent } from './pages/about/about.component';
import { PricingComponent } from './pages/pricing/pricing.component';
import { ContactComponent } from './pages/contact/contact.component';
import { DemoComponent } from './pages/demo/demo.component';
import { WrapperComponent } from './wrapper.component';
import { PricingTableComponent } from './widgets/pricing-table/pricing-table.component';
import { NavbarComponent } from './widgets/navbar/navbar.component';
import { FeaturesComponent } from './widgets/features/features.component';
import { SharedModule } from '../shared/shared.module';

@NgModule({
  declarations: [
    HomeComponent,
    AboutComponent,
    PricingComponent,
    FeaturesComponent,
    ContactComponent,
    DemoComponent,
    WrapperComponent,
    PricingTableComponent,
    NavbarComponent,
  ],
  imports: [CommonModule, WebRoutingModule, SharedModule],
})
export class WebModule {}
