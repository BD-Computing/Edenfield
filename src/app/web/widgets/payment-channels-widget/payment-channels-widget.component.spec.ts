import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PaymentChannelsWidgetComponent } from './payment-channels-widget.component';

describe('PaymentChannelsWidgetComponent', () => {
  let component: PaymentChannelsWidgetComponent;
  let fixture: ComponentFixture<PaymentChannelsWidgetComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [PaymentChannelsWidgetComponent]
    });
    fixture = TestBed.createComponent(PaymentChannelsWidgetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
