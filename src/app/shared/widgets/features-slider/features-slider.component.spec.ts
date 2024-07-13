import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FeaturesSliderComponent } from './features-slider.component';

describe('FeaturesSliderComponent', () => {
  let component: FeaturesSliderComponent;
  let fixture: ComponentFixture<FeaturesSliderComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [FeaturesSliderComponent]
    });
    fixture = TestBed.createComponent(FeaturesSliderComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
