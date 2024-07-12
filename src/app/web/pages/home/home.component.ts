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
  features: { icon: string; title: string; description: string }[] = [
    {
      icon: 'bi-people',
      title: 'Customer Management',
      description: 'Connect with your customers wherever they are',
    },
    {
      icon: 'bi-briefcase-fill',
      title: 'Underwriting',
      description: `Your insurance platform wouldn't be complete if it didn't include capabilities to manage policies.`,
    },
    {
      icon: 'bi-file-pdf-fill',
      title: 'Policy Management',
      description: `Policy documents are instantly saved at the moment you receive the policy.`,
    },
    {
      icon: 'bi-wallet2',
      title: 'Premium Collection & Allocation',
      description: `Collect Premium from the clients, allocate to the policies and remit to the underwriters with confidence and ease`,
    },
    {
      icon: 'bi-piggy-bank',
      title: 'Commission Request & Allocation',
      description: `Premium management cannot be complete without commission request. You can request for commission directly in the ERP`,
    },
    {
      icon: 'bi-activity',
      title: 'Reporting',
      description: `Access your data to see, report, and improve. As more submissions, quotes, and policies are generated, you need an aggregate view of transactions.`,
    },
  ];

  constructor(private readonly metaService: MetaService) {
    this.metaService.updateMetaData({ title: 'Home' });
  }
}
