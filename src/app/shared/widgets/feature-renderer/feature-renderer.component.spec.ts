import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FeatureRendererComponent } from './feature-renderer.component';

describe('FeatureRendererComponent', () => {
  let component: FeatureRendererComponent;
  let fixture: ComponentFixture<FeatureRendererComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [FeatureRendererComponent]
    });
    fixture = TestBed.createComponent(FeatureRendererComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
