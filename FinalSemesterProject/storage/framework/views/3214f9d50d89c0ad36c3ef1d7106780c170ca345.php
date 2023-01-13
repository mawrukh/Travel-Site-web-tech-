

<?php $__env->startSection('pageTitle'); ?>
    Inquiry Form
<?php $__env->stopSection(); ?>

<?php $__env->startSection("metaTags"); ?>
  <meta name="title" content="" />
  <meta name="keywords" content="" />
  <meta name="description" content="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageTitleContainer'); ?>
    Inquiry Form
<?php $__env->stopSection(); ?>

<?php $__env->startSection("currentPageStyles"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('components/revolution_slider/css/settings.css')); ?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('components/revolution_slider/css/style.css')); ?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('components/jquery.bxslider/jquery.bxslider.css')); ?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('components/flexslider/flexslider.css')); ?>" media="screen" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="inner_hedding">
        <div class="container-fluid">
            <div class="row" style="background-color: #808080; padding-top:10px;">
                <div class="col-lg-12 col-md-12">
                    <h1 class="text-center" style="text-weight: bold; color: #fff;">Inquiry Form</h1>
                </div>
            </div>
        </div>
    </div>
    <section id="content">
        <div class="container">
            <div id="main">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="booking-section travelo-box">
                          <form class="booking-form" action="<?php echo e(route('book.ticket')); ?>" method="post">
                              <?php echo e(csrf_field()); ?>

                              <div class="card-information">
                                  <h2>Flight Information</h2>
                                  <div class="form-group row">
                                      <div class="col-sm-6 col-md-6">
                                          <label>Departure Date :</label>
                                          <input type="date" required name="departure_date" class="input-text full-width" value="<?php echo e(old('departure_date')); ?>" placeholder="Enter Date">
                                          <?php if($errors->has('departure_date')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('departure_date')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                      <div class="col-sm-6 col-md-6">
                                          <label>Return Date : <small>(Use same if oneway)</small></label>
                                          <input type="date" required name="return_date" class="input-text full-width" value="<?php echo e(old('return_date')); ?>" placeholder="Enter Date">
                                          <?php if($errors->has('return_date')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('return_date')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <div class="col-sm-6 col-md-6">
                                          <label>Departure Airport :</label>
                                          <input type="text" required name="departure_airport" class="input-text full-width" value="<?php echo e(old('departure_airport')); ?>" placeholder="Flying From">
                                          <?php if($errors->has('departure_airport')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('departure_airport')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                      <div class="col-sm-6 col-md-6">
                                          <label>Destination Airport :</label>
                                          <input type="text" required name="destination_airport" class="input-text full-width" value="<?php echo e(old('destination_airport')); ?>" placeholder="Flying to">
                                          <?php if($errors->has('destination_airport')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('destination_airport')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <div class="col-sm-3 col-md-3">
                                          <label>Fare Type:</label>
                                          <div class="selector">
                                              <select class="full-width" required name="fare_type">
                                                  <option value="">Choose an option</option>
                                                  <option value="return">Return</option>
                                                  <option value="oneway">One way</option>
                                              </select>
                                          </div>
                                          <?php if($errors->has('fare_type')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('fare_type')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                      <div class="col-sm-3 col-md-3">
                                          <label>Ticket Class:</label>
                                          <div class="selector">
                                              <select class="full-width" required name="ticket_class">
                                                  <option value="">Choose an option</option>
                                                  <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <option value="<?php echo e($class->id); ?>" <?php if(old('ticket_class') == $class->id): ?> selected <?php endif; ?>><?php echo e($class->name); ?></option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                          </div>
                                          <?php if($errors->has('ticket_class')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('ticket_class')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                      <div class="col-sm-3 col-md-3">
                                          <label>Preferred Airline :</label>
                                          <div class="selector">
                                              <select class="full-width" name="preffered_airline">
                                                  <option value="">Any Airline</option>
                                                  <?php $__currentLoopData = $airlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $airline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <option value="<?php echo e($airline->id); ?>" <?php if(old('preffered_airline') == $airline->id): ?> selected <?php endif; ?>><?php echo e($airline->name); ?></option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                          </div>
                                          <?php if($errors->has('preffered_airline')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('preffered_airline')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                      <div class="col-sm-3 col-md-3">
                                          <label>Flight Route:</label>
                                          <div class="selector">
                                              <select class="full-width" required name="flight_route">
                                                  <option value="">Choose an option</option>
                                                  <option value="direct">Direct</option>
                                                  <option value="indirect">In-Direct</option>
                                                  <option value="both">Both</option>
                                              </select>
                                          </div>
                                          <?php if($errors->has('flight_route')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('flight_route')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                  </div>
                              </div>
                              <hr />
                              <div class="person-information">
                                  <h2>Your Personal Information</h2>
                                  <div class="form-group row">
                                      <div class="col-sm-4 col-md-4">
                                          <label>Customer Name</label>
                                          <input type="text" required name="customer_name" class="input-text full-width" value="<?php echo e(old('customer_name')); ?>" placeholder="Enter your name" />
                                          <?php if($errors->has('customer_name')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('customer_name')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                      <div class="col-sm-4 col-md-4">
                                          <label>email address</label>
                                          <input type="email" required name="email_address" class="input-text full-width" value="<?php echo e(old('email_address')); ?>" placeholder="Enter your e-mail" />
                                          <?php if($errors->has('email_address')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('email_address')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                      <div class="col-sm-4 col-md-4">
                                          <label>Phone / Mobile :</label>
                                          <input type="number" required name="contact_number" class="input-text full-width" value="<?php echo e(old('contact_number')); ?>" placeholder="Enter your contact number"/>
                                          <?php if($errors->has('contact_number')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('contact_number')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                  </div>
                                  <strong>Total No. of Passengers :</strong>
                                  <div class="form-group row">
                                      <div class="col-sm-3 col-md-3">
                                          <label>Adult <em>(16+)</em> </label>
                                          <div class="selector">
                                              <select class="full-width" required name="adult">
                                                  <?php for($i = 1; $i <= 9; $i++): ?>
                                                      <option value="<?php echo e($i); ?>" <?php if(old('adult') == $i): ?> selected <?php endif; ?>><?php echo e($i); ?></option>
                                                  <?php endfor; ?>
                                              </select>
                                          </div>
                                          <?php if($errors->has('adult')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('adult')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                      <div class="col-sm-3 col-md-3">
                                          <label>Teenager <em>(12 - 16)</em> </label>
                                          <div class="selector">
                                              <select class="full-width" required name="teenagers">
                                                  <?php for($i = 0; $i <= 9; $i++): ?>
                                                      <option value="<?php echo e($i); ?>" <?php if(old('teenagers') == $i): ?> selected <?php endif; ?>><?php echo e($i); ?></option>
                                                  <?php endfor; ?>
                                              </select>
                                          </div>
                                          <?php if($errors->has('teenagers')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('teenagers')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                      <div class="col-sm-3 col-md-3">
                                          <label>Child <em>(2 - 11)</em></label>
                                          <div class="selector">
                                              <select class="full-width" required name="child">
                                                  <?php for($i = 0; $i <= 9; $i++): ?>
                                                      <option value="<?php echo e($i); ?>" <?php if(old('child') == $i): ?> selected <?php endif; ?>><?php echo e($i); ?></option>
                                                  <?php endfor; ?>
                                              </select>
                                          </div>
                                          <?php if($errors->has('child')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('child')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                      <div class="col-sm-3 col-md-3">
                                          <label>Infant <em>(0 - 2)</em></label>
                                          <div class="selector">
                                              <select class="full-width" required name="infant">
                                                  <?php for($i = 0; $i <= 9; $i++): ?>
                                                      <option value="<?php echo e($i); ?>" <?php if(old('infant') == $i): ?> selected <?php endif; ?>><?php echo e($i); ?></option>
                                                  <?php endfor; ?>
                                              </select>
                                          </div>
                                          <?php if($errors->has('infant')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('infant')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <div class="col-sm-12 col-md-12">
                                          <label>Comments or Questions:</label>
                                          <textarea rows="4" cols="50" class="input-text full-width" value="<?php echo e(old('comments_or_questions')); ?>" name="comments_or_questions"></textarea>
                                          <?php if($errors->has('comments_or_questions')): ?>
                                              <label style="color:#CF1602;">* <?php echo e($errors->first('comments_or_questions')); ?></label>
                                          <?php endif; ?>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="checkbox">
                                          <label>
                                              <input type="checkbox" name="promo_code" value="1"> I want to receive <span class="skin-color"> Thee Travel</span> promo-code offers in the future.
                                          </label>
                                      </div>
                                  </div>
                              </div>
                              <hr />
                              <div class="form-group row">
                                  <div class="col-sm-12 col-md-12">
                                      <button type="submit" class="full-width btn-large">CONFIRM BOOKING</button>
                                  </div>
                              </div>
                              <blockquote>
                                  <cite title="Source Title">You will receive an email to complete the booking proceess from our agent.</cite>
                                  <footer>Be sure to check your spam folders.</footer>
                    					</blockquote>
                          </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC\proj1\travelSite\resources\views/inquiry.blade.php ENDPATH**/ ?>