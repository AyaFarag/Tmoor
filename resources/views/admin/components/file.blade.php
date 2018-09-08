<div class="file-field input-field">
  <div class="btn">
    <span>{{ $label }}</span>
    <input type="file" name="{{ $name }}"@if (isset($multiple)) multiple @endif>
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>